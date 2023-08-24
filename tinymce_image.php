<script>
    $(document).ready(function() {
        tinymce.init({
          selector: "textarea",
          theme: "modern",
          paste_data_images: true,
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
          toolbar2: "print preview media | forecolor backcolor emoticons",
          image_advtab: true,
          file_picker_callback: function(callback, value, meta) {
            if (meta.filetype == 'image') {
              $('#upload').trigger('click');
              $('#upload').on('change', function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                  callback(e.target.result, {
                    alt: ''
                  });
                };
                reader.readAsDataURL(file);
              });
            }
          },
          ///
          file_picker_types: 'image',
                    file_picker_callback: function(cb, value, meta) {
                        var input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', 'image/*');

                        input.onchange = function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            // call the callback and populate the Title field with the file name
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                        reader.readAsDataURL(file);
                        };
                        
                        input.click();
                    },
          ////
          templates: [{
            title: 'Test template 1',
            content: 'Test 1'
          }, {
            title: 'Test template 2',
            content: 'Test 2'
          }]
        });
      });
</script>









                    <script>
                    tinymce.init({
                    selector: '#editor',
                    plugins: 'image code',
                    toolbar: 'undo redo | link image | code',
                    // enable title field in the Image dialog
                    image_title: true, 
                   //video uploading to tinymce
                    media_live_embeds: true,
                    //media poster
                    media_poster: false
                    // enable automatic uploads of images represented by blob or data URIs
                    automatic_uploads: true,
                    // add custom filepicker only to Image dialog
                    file_picker_types: 'image',
                    file_picker_callback: function(cb, value, meta) {
                        var input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', 'image/*');

                        input.onchange = function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            // call the callback and populate the Title field with the file name
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                        reader.readAsDataURL(file);
                        };
                        
                        input.click();
                    }
                    ///media uploading : Using media_url_resolver
         /* The following example simply checks if the url contains some special url and returns an iframe if it does. 
           Otherwise it calls the resolve callback with an empty string, falling back to the default media embed logic. */
                        media_url_resolver: function (data, resolve/*, reject*/) {
                        if (data.url.indexOf('YOUR_SPECIAL_VIDEO_URL') !== -1) {
                        var embedHtml = '<iframe src="' + data.url +
                        '" width="400" height="400" ></iframe>';
                        resolve({html: embedHtml});
                        } else {
                        resolve({html: ''});
                        }
                       }
                    //////////////////////
             /*
      Example: Using video_template_callback
          This option allows you to specify the function 
          that will return the HTML embed code of the video 
          media that you are attempting to insert into TinyMCE.
             */
            video_template_callback: function(data) {
   return '<video width="' + data.width + '" height="' + data.height + '"' + (data.poster ? ' poster="' + data.poster + '"' : '') + ' controls="controls">\n' + '<source src="' + data.source + '"' + (data.sourcemime ? ' type="' + data.sourcemime + '"' : '') + ' />\n' + (data.altsource ? '<source src="' + data.altsource + '"' + (data.altsourcemime ? ' type="' + data.altsourcemime + '"' : '') + ' />\n' : '') + '</video>';
 }
                    /////////////////////
                    });
                    </script>



<script>
tinymce.init({
    selector: "textarea",theme: "modern",width: 680,height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
 });
 </script>



<script>
tinyMCE.init({
    selector: '.tinyMCE-content-full',
    height: 400,
    theme: 'modern',
    plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help image code'
    ],
    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fontsizeselect',
    toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',

    fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
    image_advtab: true,
    /////
    file_picker_types: 'file image media',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/clients/tinymceFileUpload');
        var token = $('[name="csrf-token"]').prop('content');
        xhr.setRequestHeader("X-CSRF-Token", token);
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    },
    ////////
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/* audio/* video/*');
        input.onchange = function() {
            var file = this.files[0];

            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // call the callback and populate the Title field with the file name
                cb(blobInfo.blobUri(), { title: file.name });
            };
        };

        input.click();
    }
    /////////
});
</script>





<script type="text/javascript">
            tinymce.init({
            selector: '#thaw',
             // enable title field in the Image dialog
            automatic_uploads: true,
            width: 700,
            height: 200,
            plugins: [
              'advlist autolink link image lists charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
              'table emoticons template paste help ',
              'responsivefilemanager code'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
              'bullist numlist outdent indent | link image | print preview media fullpage | ' +
              'forecolor backcolor emoticons |help',

                        ////////////
             //// add custom filepicker only to Image dialog
                      file_picker_types: 'file image media',
                    file_picker_callback: function(cb, value, meta) {
                        var input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', 'image/* audio/* video/*');

                        input.onchange = function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            // call the callback and populate the Title field with the file name
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                        reader.readAsDataURL(file);
                        };
                        
                        input.click();
                    },
          /////////////
          image_advtab: true ,

            menu: {
              favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
            });
  </script>




<iframe src="{{ url('uploads/chapters/Author.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" 
title="PDF in an i-Frame" frameborder="0" scrolling="auto" style="width:100%; height:100%;"></iframe>