
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Africa Speaks - Community Area</title>
    <link href="/assets/css/internal_style.css?ver=221221114035" rel="stylesheet"/>

    <!-- start stylesheets -->
<link rel="stylesheet" media="screen" href="https://community.africaspeaks.global/node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://community.africaspeaks.global/node_modules/easy-autocomplete/dist/easy-autocomplete.min.css">
<link rel="stylesheet" href="https://community.africaspeaks.global/node_modules/easy-autocomplete/dist/easy-autocomplete.themes.min.css">
<link rel="stylesheet" href="https://community.africaspeaks.global/node_modules/bootstrap-icons/font/bootstrap-icons.css">
<link href="https://community.africaspeaks.global/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" media="screen" rel="stylesheet">
<link href="https://community.africaspeaks.global/node_modules/select2/dist/css/select2.min.css" media="screen" rel="stylesheet">
<link href="https://community.africaspeaks.global/node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css" media="screen" rel="stylesheet">
<link rel="stylesheet" media="screen" href="https://community.africaspeaks.global/assets/css/main.css?v=221221114035">
<link rel="icon" href="https://africaspeaks.global/wp-content/uploads/2021/08/cropped-favicon-01-32x32.png" sizes="32x32" />
<link rel="icon" href="https://africaspeaks.global/wp-content/uploads/2021/08/cropped-favicon-01-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://africaspeaks.global/wp-content/uploads/2021/08/cropped-favicon-01-180x180.png" />
<meta name="msapplication-TileImage" content="https://africaspeaks.global/wp-content/uploads/2021/08/cropped-favicon-01-270x270.png" />

<!-- end stylesheets -->

<!-- start scripts -->
<script src="https://community.africaspeaks.global/node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/bootbox/dist/bootbox.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/jquery-match-height/jquery.matchHeight.js"></script>
<script src="/node_modules/ckeditor4/ckeditor.js"></script>
<script src="/node_modules/ckeditor4/adapters/jquery.js"></script>
<script src="/node_modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js"></script>
<script src="/node_modules/mark.js/dist/jquery.mark.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/select2/dist/js/select2.full.min.js"></script>
<script src="https://community.africaspeaks.global/node_modules/jquery.dirty/dist/jquery.dirty.js"></script>
<!-- end scripts -->

<script>
    const unloadListener = (event) => {
        event.preventDefault();
        return event.returnValue = "You have unsaved changes. Are you sure you want to exit?";
    };
    let changesSaved = {
        value: false,
        set: function (value) {
            this.value = value;
            this.getOnChange();
        },
        getOnChange:function () {
            if(this.value) {
                removeEventListener("beforeunload", unloadListener,  true);
            }
        }
    }


    function isOverflown(element) {
        return element.scrollHeight > element.clientHeight || element.scrollWidth > element.clientWidth;
    }
    var editors = {};
    $(document).ready(function () {

        $('.saveInputs').change(function (e) {
            addEventListener("beforeunload", unloadListener,  true);
        });

        var topicComplete = {
            minCharNumber: 3,
            requestDelay: 500,
            theme: "bootstrap",
            url: function(phrase) {
                return "/api/search_topics?q=" + phrase + "&format=json";
            },
            list: {
                onClickEvent: function() {
                    var value = $("#forumSearch").getSelectedItemData().title;
                    location.href = '/forum/search?q='+value;
                }
            },
            template: {
                type: "custom",
                method: function(value, item) {
                    if(item.type == 'topic'){
                        badge = 'badge-warning';
                    }

                    if(item.type == 'comment'){
                        badge = 'badge-danger';
                    }
                    return '<span class="searchResultLabel badge badge-pill '+badge+' ">'+item.type+'</span> '+value;
                }
            },
            getValue: "title"
        };

        
        $('.editor').each(function (i, e){
            let element = this.id;
                        $(e).ckeditor({
                customConfig: '/assets/js/ckeditor_config.js'
            }, function (){
                this.on('change', function () {
                    addEventListener("beforeunload", unloadListener,  true);
                });
            });



            
        });
        
        $('.searchForm').submit(function () {
           if($('#forumSearch').val().length>0){
               return true;
           } else{
               return false;
           }
        });
        $('#forumSearch').easyAutocomplete(topicComplete);
        
        //enable tooltips global
        $('.parentComment').each(function (index, element) {
            if(!isOverflown(element)){

                $(this).siblings('a.expandContentBtn').addClass('d-none');
            } else{

                $(this).siblings('a.expandContentBtn').removeClass('d-none');
            }
        });

        $('.expandContentBtn').click(function (e){
            e.preventDefault();
            parentDiv = $(this).attr('href');
            expanded =  $(this).attr('data-aria-expanded');
            if(expanded == 'false'){
                $(this).attr('data-aria-expanded','true');
                $(parentDiv).removeClass('commentHideOverflow');
                $(this).html('SHOW LESS')
            } else{
                $(this).attr('data-aria-expanded','false');
                $(parentDiv).addClass('commentHideOverflow');
                $(this).html('SHOW MORE')
            }


        });

        $('[data-toggle="tooltip"]').tooltip()

        const commentControl = {
            element: $('div.commentControl'),
            get(){
                return  this.element;
            },
            hide(){
                this.element.collapse('hide');
                this.set_comment_id('');
                this.set_parent_id('');
            },
            show(){
                this.element.collapse('show');
                this.element.get(0).scrollIntoView();
            },
            set_parent_id($parent_comment_id){
                this.element.find('input[name=parent_comment_id]').val($parent_comment_id);
            },
            set_comment_id($comment_id ){
                this.element.find('input[name=comment_id]').val($comment_id);
            },
            setTitle($title){
                this.element.find('h3').html($title);
            },
            setButtonLabel($label){
                this.element.find('a.actionBtn').html($label);
            },
            setEndPoint($endpoint){
                this.element.find('a.ajaxBtns').attr('data-endpoint', $endpoint);
                this.element.find('a.ajaxBtns').attr('data-reset-form', true);
                this.element.find('a.ajaxBtns').attr('data-redirect-url', 'https://community.africaspeaks.global/forum/home');
            },
            getComment($comment_id){
                var $this = this;
                //$this.setEditor('');
                $.getJSON( "/api/forum_get_comment_content/"+$comment_id).fail(function (xhr, status, error) {
                    ajaxErrorHandler.handle(xhr, status, error);
                }).done(function (data) {
                    $this.setEditor(data.content);
                });
            },
            setEditor(content){
                var $this = this;
                setTimeout(function(){
                    element = $this.element.find('textarea');
                    element.ckeditor().editor.setData(content);
                }, 150);

            }
        }

        const ajaxErrorHandler = {
    handle(xhr, status, error){
        if(xhr.status == 500){
            errorMessage = 'Error '+xhr.status+': Internal Server Error. Kindly report to <a target="_blank" href="mailto:info@africaspeaks.global">info@africaspeaks.global</a> try again later.'
        } else
        if(xhr.status == 200){
            errorMessage = 'Error '+xhr.status+': Remote Data Malformed. Kindly report to <a target="_blank" href="mailto:info@africaspeaks.global">info@africaspeaks.global</a> or try again later.'
        } else
        if(xhr.status == 403){
            errorMessage = 'Error '+xhr.status+': Security Token Expired. Refresh your browser and try again'
        } else{
            errorMessage = 'Error '+xhr.status+': '+error;
        }
        bootbox.alert({
            title: "ERROR",
            message: '<p class="alert alert-danger">'+errorMessage+'</p>'
        });
    }
}
        $('.closeCommentControl').click(function (e) {
            commentControl.hide();
            commentControl.setEditor('');
        })

        $('.commentBtn').click(function (e){

            e.preventDefault();
            $('div.commentControlWrapper').append(commentControl.get());
            commentControl.show();
            commentControl.setTitle('Add Comment');
            commentControl.setEndPoint('/api/forum_create_comment');
            commentControl.setButtonLabel('ADD');
        });

        $('.replyBtn').click(function (e){
            e.preventDefault();

            comment_id = $(this).attr('data-comment-id');
            $(this).closest('div.col').find('div.controlWrapper').append(commentControl.get());
            commentControl.set_parent_id(comment_id);
            commentControl.show();
            commentControl.setEditor('');
            commentControl.setTitle('Add Reply');
            commentControl.setEndPoint('/api/forum_create_comment');
            commentControl.setButtonLabel('ADD REPLY');
        });

        $('.editBtn').click(function (e){
            e.preventDefault();
            comment_id = $(this).attr('data-comment-id');
            $(this).closest('div.col').find('div.controlWrapper').append(commentControl.get());
            commentControl.set_comment_id(comment_id);
            commentControl.getComment(comment_id);
            commentControl.show();
            commentControl.setTitle('Edit Comment');
            commentControl.setEndPoint('/api/forum_update_comment');
            commentControl.setButtonLabel('UPDATE');
        });

        $('.reportBtn').click(function (){
            reportModal =  $('#reportModal');
            $comment_id = $(this).attr('data-comment-id');
            $endPoint = $(this).attr('data-endpoint');
            reportModal.modal('show');
            reportModal.find('input[name=comment_id]').val($comment_id);
            reportModal.find('input[name=topic_id]').val($comment_id);
            reportModal.find('input[name=content_id]').val($comment_id);
            ajaxBtn =  reportModal.find('button.reportModalBtn');
            ajaxBtn.attr('data-endpoint',$endPoint);
        });

        $('.ajaxBtns').click(function (e) {
            e.preventDefault()

            clickedButton = this;

            var theForm = $(this).closest('form');
            var theAjaxResponse = theForm.find('div.ajaxStatus');
            var formTextArea = theForm.find('textarea.editor');
            $(formTextArea).each(function (i, e) {
                //$(this).html($(this).attr('id').getData());
            })

            var formData = theForm.serialize();
            var endPoint = $(this).attr('data-endpoint');
            var resetForm = $(this).attr('data-reset-form');
            var redirect = $(this).attr('data-redirect-url');
            var formReset = false;
            var redirectSet = false;

            if(resetForm){
                if(resetForm.length > 0){
                    if(resetForm.toLowerCase() === 'true'){
                        formReset = true;
                    }
                }
            }
            if(redirect){
                if(redirect.length > 0){
                    redirectSet = true;
                }
            }


            $('.is-invalid').removeClass('is-invalid');
            $('div.invalid-feedback').remove();
            theAjaxResponse.html('<p class="alert alert-danger"> <span class="spinner-border text-danger" role="status"></span><span class="sr-only">Loading...</span> Sending Data</span></p>');
            $.ajax({
                type:'POST',
                url:endPoint,
                dataType:'json',
                data:formData,
                success:function(data) {

                    $('input[name="csrf_africa_speaks"]').val(data.csrf);

                    theAjaxResponse.html('');
                    if(data.error == true){

                        theForm.get(0).scrollIntoView();
                        if(data.error_msg){
                            theAjaxResponse.html('<p class="alert alert-danger">'+data.error_msg+'</p>');
                        }



                        $.each(data.errors, function (index, value) {
                            $('#'+index).addClass('is-invalid').after('<div class="invalid-feedback">'+value+'</div>');
                        });

                    }

                    if(data.error == false){
                        theForm.get(0).scrollIntoView();
                        if(data.success == true){
                            changesSaved.set(true);
                            if(formReset){
                                theForm[0].reset();
                            }

                            if(data.success_msg){
                                bootbox.alert({
                                    title: "SUCCESS",
                                    message: '<p class="alert alert-success">'+data.success_msg+'</p>',
                                    callback: function (result) {

                                        if(data.redirect_url){
                                            location.href = data.redirect_url
                                        } else{
                                            if(redirectSet){
                                                location.href = redirect
                                            }
                                        }

                                    }
                                });
                            } else{
                                if(data.redirect_url){
                                    location.href = data.redirect_url
                                } else{
                                    if(redirectSet){
                                        location.href = redirect
                                    }
                                }
                            }




                        }
                    }



                } }).fail(function (xhr, status, error) {

                theForm.get(0).scrollIntoView();
                ajaxErrorHandler.handle(xhr, status, error);
            });


        });

        $('.reportModalBtn').click(function (e) {
            e.preventDefault()

            clickedButton = this;

            var theForm = $(this).closest('form');
            var theAjaxResponse = theForm.find('div.ajaxStatus');
            var formTextArea = theForm.find('textarea.editor');
            $(formTextArea).each(function (i, e) {
                //$(this).html($(this).attr('id').getData());
            })

            var formData = theForm.serialize();
            var endPoint = $(this).attr('data-endpoint');
            var resetForm = $(this).attr('data-reset-form');
            var redirect = $(this).attr('data-redirect-url');
            var formReset = false;
            var redirectSet = false;

            if(resetForm){
                if(resetForm.length > 0){
                    if(resetForm.toLowerCase() === 'true'){
                        formReset = true;
                    }
                }
            }
            if(redirect){
                if(redirect.length > 0){
                    redirectSet = true;
                }
            }


            $('.is-invalid').removeClass('is-invalid');
            $('div.invalid-feedback').remove();
            theAjaxResponse.html('<p class="alert alert-danger"> <span class="spinner-border text-danger" role="status"></span><span class="sr-only">Loading...</span> Sending Data</span></p>');
            $.ajax({
                type:'POST',
                url:endPoint,
                dataType:'json',
                data:formData,
                success:function(data) {

                    $('input[name="csrf_africa_speaks"]').val(data.csrf);

                    theAjaxResponse.html('');
                    if(data.error == true){

                        theForm.get(0).scrollIntoView();
                        if(data.error_msg){
                            theAjaxResponse.html('<p class="alert alert-danger">'+data.error_msg+'</p>');
                        }



                        $.each(data.errors, function (index, value) {
                            $('#'+index).addClass('is-invalid').after('<div class="invalid-feedback">'+value+'</div>');
                        });

                    }

                    if(data.error == false){
                        theForm.get(0).scrollIntoView();
                        if(data.success == true){
                            if(formReset){
                                theForm[0].reset();
                            }

                            if(data.success_msg){
                                $('#reportModal').modal('hide');
                                bootbox.alert({
                                    title: "SUCCESS",
                                    message: '<p class="alert alert-success">'+data.success_msg+'</p>',
                                    callback: function (result) {

                                        if(data.redirect_url){
                                            location.href = data.redirect_url
                                        } else{
                                            if(redirectSet){
                                                location.href = redirect
                                            }
                                        }

                                    }
                                });
                            } else{
                                if(data.redirect_url){
                                    location.href = data.redirect_url
                                } else{
                                    if(redirectSet){
                                        location.href = redirect
                                    }
                                }
                            }




                        }
                    }



                } }).fail(function (xhr, status, error) {

                theForm.get(0).scrollIntoView();
                ajaxErrorHandler.handle(xhr, status, error);
            });


        });

        $('.deleteBtn').click(function (){
            $comment_id = $(this).attr('data-comment-id');
            let deleteConfirm =  bootbox.confirm({
                title: "DELETE COMMENT",
                message: '<p class="alert alert-warning">Are you sure you want to delete the comment?</p>',
                callback: function(result){
                    if(result === true){
                        $.getJSON( "/api/forum_delete_comment/"+$comment_id, function( data ) {
                                if(data.error == true){
                                    bootbox.alert({
                                        title: "ERROR",
                                        message: '<p class="alert alert-danger">'+data.error_msg+'</p>'
                                    });
                                }
                                if(data.error == false){
                                    deleteConfirm.modal('hide');
                                    bootbox.alert({
                                        title: "ERROR",
                                        message: '<p class="alert alert-success">'+data.success_msg+'</p>',
                                        callback: function () {
                                            location.reload();
                                        }

                                    });
                                }
                            }
                        ).fail(function (xhr, status, error) {
                            ajaxErrorHandler.handle(xhr, status, error);
                        });
                    }
                }
            });
        });
                $('div#navbarNav ul li a.nav-link[data-nav="Home"]').addClass('active');
        
    });
</script>    <style>
        .btn-warning{
            background-color: #FAAA28!important;
            color:#000!important;
        }

            </style>

    <script type="text/javascript">

       $(document).ready(function () {

           const ajaxErrorHandler = {
    handle(xhr, status, error){
        if(xhr.status == 500){
            errorMessage = 'Error '+xhr.status+': Internal Server Error. Kindly report to <a target="_blank" href="mailto:info@africaspeaks.global">info@africaspeaks.global</a> try again later.'
        } else
        if(xhr.status == 200){
            errorMessage = 'Error '+xhr.status+': Remote Data Malformed. Kindly report to <a target="_blank" href="mailto:info@africaspeaks.global">info@africaspeaks.global</a> or try again later.'
        } else
        if(xhr.status == 403){
            errorMessage = 'Error '+xhr.status+': Security Token Expired. Refresh your browser and try again'
        } else{
            errorMessage = 'Error '+xhr.status+': '+error;
        }
        bootbox.alert({
            title: "ERROR",
            message: '<p class="alert alert-danger">'+errorMessage+'</p>'
        });
    }
}
           $('.contentLike').click(function (){
               let likeHeart = $(this);
               let id = $(this).attr('data-id');
               $.getJSON( "/api/toggle_content_like/"+id, function( data ) {
                       if(data.error == true){
                           bootbox.alert({
                               title: "ERROR",
                               message: '<p class="alert alert-danger">'+data.error_msg+'</p>'
                           });
                       }
                       if(data.error == false){
                           var likes ;
                           $.getJSON( "/api/get_likes_per_content/"+id).fail(function (xhr, status, error) {
                               ajaxErrorHandler.handle(xhr, status, error);
                           }).done(function (data) {
                               likes = data.count;
                               likeHeart.find('> div.likeCount').html(likes);

                               $.getJSON( "/api/get_user_like_content_status/"+id).fail(function (xhr, status, error) {
                                   ajaxErrorHandler.handle(xhr, status, error);
                               }).done(function (data) {
                                   if(data.status === true){
                                       likeHeart.addClass('redBg').removeClass('darkBrownBg');
                                   }

                                   if(data.status === false){
                                       likeHeart.addClass('darkBrownBg').removeClass('redBg');
                                   }
                               });
                           });

                       }
                   }
               ).fail(function (xhr, status, error) {
                   ajaxErrorHandler.handle(xhr, status, error);
               });
           });

           $('.commentLike').click(function (){
               var likeHeart = $(this);
               comment_id = $(this).attr('data-comment-id');
               $.getJSON( "/api/toggle_comment_content_like/"+comment_id, function( data ) {
                       if(data.error == true){
                           bootbox.alert({
                               title: "ERROR",
                               message: '<p class="alert alert-danger">'+data.error_msg+'</p>'
                           });
                       }
                       if(data.error == false){
                           var likes ;
                           $.getJSON( "/api/get_likes_per_comment/"+comment_id).fail(function (xhr, status, error) {
                               ajaxErrorHandler.handle(xhr, status, error);
                           }).done(function (data) {
                               likes = data.count;
                               likeHeart.find('> div.likeCount').html(likes);

                               $.getJSON( "/api/get_user_like_comment_status/"+comment_id).fail(function (xhr, status, error) {
                                   ajaxErrorHandler.handle(xhr, status, error);
                               }).done(function (data) {
                                   if(data.status === true){
                                       likeHeart.addClass('redBg').removeClass('darkBrownBg');
                                   }

                                   if(data.status === false){
                                       likeHeart.addClass('darkBrownBg').removeClass('redBg');
                                   }
                               });
                           });

                       }
                   }
               ).fail(function (xhr, status, error) {
                   ajaxErrorHandler.handle(xhr, status, error);
               });
           });

           $('#communityContent a').each(function () {

               $(this).click(function (e) {
                   e.preventDefault();
                   let link = $(this).attr('href');
                   string = link.replace('https://internal.africaspeaks.global/').replace(/\/+$/, '');
                   parts = string.split('/');
                   slug = parts.pop();
                   document.location = '/forum/home/'+slug;

               })
           });

       });

    </script>
</head>
<body>
<div class="orangeBg">
    <div class="containMaxWidth ">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="https://community.africaspeaks.global">
                <img style="max-width: 150px;" src="https://community.africaspeaks.global/assets/images/comm_logo.png"/>
            </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="https://africaspeaks.global">Website</a>
                    </li>
                    <li class="nav-item">
                        <a data-nav="Home" class="nav-link" href="https://community.africaspeaks.global/forum/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-nav="Forum"  class="nav-link" href="https://community.africaspeaks.global/forum/">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a data-nav="Directory" class="nav-link" href="https://community.africaspeaks.global/members">Directory</a>
                    </li>
                                        <li  class="nav-item">
                        <a data-nav="Admin" class="nav-link" href="https://community.africaspeaks.global/admin">Admin</a>
                    </li>
                                     
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="50,50">
                            <div class="avatar32 avatarEnhance">
                                
                            <div class="avatarInitialsSmall">
                                            <img class="img-fluid avatarImage" src="/api/render_image?path=uploads/1/c4ca4238a0b923820dcc509a6f75849b.jpg"/>

                                </div>
                                                                
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://community.africaspeaks.global/account/">My Account</a>
                            <a class="dropdown-item" href="https://community.africaspeaks.global/account/notifications">Notifications <span class="badge badge-danger">0</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://community.africaspeaks.global/account/signout">Sign Out</a>
                        </div>
                    </li>

                </ul>
            </div>
                    </nav>
    </div>
</div>
<div class="container-fluid " id="frameWrapper">
    
    <div id="" class="row containMaxWidth">
                    <div id ="communityContent" class="col-12">
                <div data-parent="true" class="vc_row inverted-device-order limit-width row-container" id="row-unique-0"><div class="row col-double-gutter quad-top-padding quad-bottom-padding single-h-padding row-parent" style="max-width:1596px; margin-left:auto; margin-right:auto;"><div class="wpb_row row-inner"><div class="wpb_column pos-middle pos-center align_left column_parent col-lg-5 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode_text_column" ><p><strong><span class="font-361897">LATEST</span></strong></p>
                
</div>
<div class="vc_custom_heading_wrap "><div class="heading-text el-text" ><h1 class="font-361897 h1 text-color-133991-color" ><span><span class="font-361897 font-361897"><a class="text-color-133991-color" href="https://africaspeaks.global/abs/Tanzania/">The State of Christian Publishing In Tanzania</a></span></h1></div><div class="clear"></div></div><div class="uncode_text_column" ><p>The Africa Bookshop Survey 2022 seeks to understand what is the status of publishing on the continent. One of the goals is to put together a comprehensive directory of Christian publishing professionals on the continent.</p>
</div></div></div></div></div></div><div class="wpb_column pos-top pos-center align_left column_parent col-lg-7 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode-single-media  text-left"><div class="single-wrapper" style="max-width: 100%;"><div class="tmb tmb-light  tmb-img-ratio tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg"><div class="t-inside"><div class="t-entry-visual"><div class="t-entry-visual-tc"><div class="uncode-single-media-wrapper"><div class="h3 fluid-object" style="padding-top: 56.25%"><iframe width="1280" height="720" src="https://www.youtube.com/embed/K4Ld3wi4PDE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
					</div>
				</div></div></div></div></div></div></div></div></div></div><script id="script-row-unique-0" data-row="script-row-unique-0" type="text/javascript" class="vc_controls">UNCODE.initRow(document.getElementById("row-unique-0"));</script></div></div></div><div data-parent="true" class="vc_row inverted-device-order row-container" id="row-unique-1"><div class="row unequal col-double-gutter double-top-padding double-bottom-padding single-h-padding limit-width row-parent"><div class="wpb_row row-inner"><div class="wpb_column pos-middle pos-center align_left column_parent col-lg-4 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode-single-media  text-left"><div class="single-wrapper" style="max-width: 100%;"><a class="single-media-link" href="https://internal.africaspeaks.global/the-place-of-writing-in-the-history-of-christianity-in-africa/" title="Publishing Conversations | S01EP01  | The Place of Writing in The History of Christianity In Africa"><div class="tmb tmb-light  tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg"><div class="t-inside"><div class="t-entry-visual"><div class="t-entry-visual-tc"><div class="uncode-single-media-wrapper"><img class="wp-image-100774" src="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01.jpg" width="1920" height="1080" alt="" srcset="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01.jpg 1920w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-300x169.jpg 300w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-1024x576.jpg 1024w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-768x432.jpg 768w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-1536x864.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
					</div>
				</div></div></div></a></div></div><div class="uncode_text_column text-color-133991-color" ><p></span></p>
<h4><span class="font-361897 font-361897"><a class="text-color-133991-color" href="https://internal.africaspeaks.global/publishing-conversations/the-place-of-writing-in-the-history-of-christianity-in-africa/">Publishing Conversations | S01EP01 | The Place of Writing in The History of Christianity In Africa</a></span></h4>
<p>
</div></div></div></div></div></div><div class="wpb_column pos-top pos-center align_left column_parent col-lg-4 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode-single-media  text-left"><div class="single-wrapper" style="max-width: 100%;"><a class="single-media-link" href="https://internal.africaspeaks.global/myths-about-christian-publishing-in-africa"><div class="tmb tmb-light  tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg"><div class="t-inside"><div class="t-entry-visual"><div class="t-entry-visual-tc"><div class="uncode-single-media-wrapper"><img class="wp-image-100769" src="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-02.png" width="1920" height="1080" alt="" srcset="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-02.png 1920w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-02-300x169.png 300w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-02-1024x576.png 1024w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-02-768x432.png 768w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-02-1536x864.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
					</div>
				</div></div></div></a></div></div><div class="uncode_text_column text-small text-color-133991-color" ></p>
<h4><span class="font-361897 font-361897"><a class="text-color-133991-color" href="https://internal.africaspeaks.global/publishing-conversations/myths-about-christian-publishing-in-africa">Publishing Conversations | S01EP02 | Myths About Christian Publishing In Africa </a></span></h4>
<p>
</div></div></div></div></div></div><div class="wpb_column pos-top pos-center align_left column_parent col-lg-4 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode-single-media  text-left"><div class="single-wrapper" style="max-width: 100%;"><a class="single-media-link" href="https://internal.africaspeaks.global/improving-quality-and-encouraging-publishing/"><div class="tmb tmb-light  tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg"><div class="t-inside"><div class="t-entry-visual"><div class="t-entry-visual-tc"><div class="uncode-single-media-wrapper"><img class="wp-image-100770" src="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-03.png" width="1920" height="1080" alt="" srcset="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-03.png 1920w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-03-300x169.png 300w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-03-1024x576.png 1024w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-03-768x432.png 768w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-03-1536x864.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
					</div>
				</div></div></div></a></div></div><div class="uncode_text_column text-color-133991-color" ></p>
<h4><span class="font-361897 font-361897"><a class="text-color-133991-color" href="https://internal.africaspeaks.global/publishing-conversations/improving-quality-and-encouraging-publishing/">Publishing Conversations | S01EP03 | Improving Quality &amp; Encouraging Publishing </a></span></h4>
<p>
</div></div></div></div></div></div><script id="script-row-unique-1" data-row="script-row-unique-1" type="text/javascript" class="vc_controls">UNCODE.initRow(document.getElementById("row-unique-1"));</script></div></div></div><div data-parent="true" class="vc_row inverted-device-order vc_custom_1652944850897 row-container" style="margin-top: -50px ;" id="row-unique-2"><div class="row unequal col-double-gutter double-top-padding double-bottom-padding single-h-padding limit-width row-parent"><div class="wpb_row row-inner"><div class="wpb_column pos-middle pos-center align_left column_parent col-lg-4 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode-single-media  text-left"><div class="single-wrapper" style="max-width: 100%;"><a class="single-media-link" href="https://internal.africaspeaks.global/atnp-and-the-vision-for-africa" title="Publishing Conversations | S01EP01  | The Place of Writing in The History of Christianity In Africa"><div class="tmb tmb-light  tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg"><div class="t-inside"><div class="t-entry-visual"><div class="t-entry-visual-tc"><div class="uncode-single-media-wrapper"><img class="wp-image-100772" src="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-05.png" width="1920" height="1080" alt="" srcset="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-05.png 1920w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-05-300x169.png 300w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-05-1024x576.png 1024w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-05-768x432.png 768w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-05-1536x864.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
					</div>
				</div></div></div></a></div></div><div class="uncode_text_column text-color-133991-color" ></p>
<h4><span class="font-361897 font-361897"><a class="text-color-133991-color" href="https://internal.africaspeaks.global/publishing-conversations/atnp-and-the-vision-for-africa">Publishing Conversations | S01EP04 | ATNP and The Vision for Africa</a></span></h4>
<p>
</div></div></div></div></div></div><div class="wpb_column pos-top pos-center align_left column_parent col-lg-4 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"><div class="uncode-single-media  text-left"><div class="single-wrapper" style="max-width: 100%;"><a class="single-media-link" href="https://internal.africaspeaks.global/the-future-of-africas-christianity-and-publishing"><div class="tmb tmb-light  tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg"><div class="t-inside"><div class="t-entry-visual"><div class="t-entry-visual-tc"><div class="uncode-single-media-wrapper"><img class="wp-image-100774" src="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01.jpg" width="1920" height="1080" alt="" srcset="https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01.jpg 1920w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-300x169.jpg 300w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-1024x576.jpg 1024w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-768x432.jpg 768w, https://internal.africaspeaks.global/wp-content/uploads/2022/05/Part-01-1536x864.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
					</div>
				</div></div></div></a></div></div><div class="uncode_text_column" ></p>
<h4><span class="font-361897 font-361897"><a class="text-color-133991-color" href="https://internal.africaspeaks.global/publishing-conversations/the-future-of-africas-christianity-and-publishing">Publishing Conversations | S01EP05 | The Future of Africa&#8217;s Christianity and Publishing</a></span></h4>
<p>
</div></div></div></div></div></div><div class="wpb_column pos-top pos-center align_left column_parent col-lg-4 single-internal-gutter"><div class="uncol style-light"  ><div class="uncoltable"><div class="uncell no-block-padding" ><div class="uncont"></div></div></div></div></div><script id="script-row-unique-2" data-row="script-row-unique-2" type="text/javascript" class="vc_controls">UNCODE.initRow(document.getElementById("row-unique-2"));</script></div></div></div>
            </div>
        
        

    </div>

    <!-- add/edit comment control -->
    <div class="commentControl collapse">
        <form>
            <div class="ajaxStatus"></div>
            <input type="hidden" name="csrf_africa_speaks" value="9ee338d8cede07541782a67a5435b64b" />            <input type="hidden" name="content_id" id="content_id" value="1">
            <input type="hidden" name="parent_comment_id" id="parent_comment_id" value="">
            <input type="hidden" name="comment_id" id="comment_id" value="">
            <h3 class="redColor commentControlTitle py-2"></h3>
            <textarea name="content" id="content" class="editor"></textarea>
            <a class="ajaxBtns actionBtn btn btn-warning my-3">ADD</a>
            <a class="btn closeCommentControl btn-danger my-3">CANCEL</a>
        </form>
    </div>
    <!-- end add/edit comment control -->

    <!-- report modal -->
<!-- Modal -->
<div class="modal fade" id="reportModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <form>
            <input type="hidden" name="csrf_africa_speaks" value="9ee338d8cede07541782a67a5435b64b" />            <input type="hidden" name="user_id">
            <input type="hidden" name="content_id">
            <input type="hidden" name="topic_id">
            <input type="hidden" name="comment_id">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Report Issue</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="ajaxStatus"></div>
                    You are about to flag this content as being inappropriate.  Please select a reason or provide an explanation why you are flagging this comment and submit your report.  The administrator will be notified.

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type_1" value="SPAM" >
                        <label class="form-check-label" for="type_1">
                            <strong>SPAM</strong>
                        </label>
                        <p>Exits only to promote an answer, product or service, does not disclose the author's affiliation</p>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type_2" value="ABUSE" >
                        <label class="form-check-label" for="type_2">
                            <strong>Rude or Abusive</strong>
                        </label>
                        <p>A reasonable person would find this content inappropriate for respectful discourse</p>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type_3" value="OTHER REASON">
                        <label class="form-check-label" for="type_3">
                            <strong>Other Reason</strong>
                        </label>

                    </div>
                    <div class="form-check">
                        <p>Please explain why you are reporting this content</p>
                        <textarea id="reason" name="reason" class="editor"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button data-redirect-url="" data-reset-form="true"  type="button" class="btn btn-warning reportModalBtn">Report</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>


        </div>
        </form>
    </div>
</div>
<!-- end report modal --></div>
<script>
    </script>
<footer>
    <div class="container-fluid footerBG mt-5">
        <div class="row containMaxWidth py-5">
            <div class="col-12 col-md-3 text-center py-2">
                <img style="max-width: 250px;" class="img-fluid" src="https://community.africaspeaks.global/assets/images/logo_color_white.png">
            </div>
            <div class="col-12 col-md-9 py-2">
                <ul>
                                            <li><a href="/forum/">FORUM</a></li>
                        <li><a href="/members">DIRECTORY</a></li>
                        <li><a href="/account">MY ACCOUNT</a></li>
                                        <li><a target="_blank" href="https://africaspeaks.global">View Website</a></li>
                </ul>
                <div id="socialWrapper">
                    <a target="_blank" href="https://www.facebook.com/AfricaSpeaks18"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/AfricaSpeaks18"><i class="bi bi-twitter"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/africaspeaks18/"><i class="bi bi-linkedin"></i></a>
                    <a target="_blank" href="https://wa.me/254785820117"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 text-left">2022 Africa Speaks. All rights reserved</div>
            <div class="col-12 col-md-6 text-right">Designed & Developed by <a target="_blank" href="https://calvarystudio.co.ke">Calvary Studio</a>
            </div>
        </div>
    </div>
</footer></body>

</html>
