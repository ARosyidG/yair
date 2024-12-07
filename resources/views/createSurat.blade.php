@extends('Layout.Navbar')

@section('Content')
    <main class="Editor mx-5 my-5">
        <ul class="list-group list-group flex-column mb-auto mt-3">
            <li class="list-group-item p-1 bg-success text-white"> Editor </li>
            <li id="Editor" class="list-group-item p-1 px-3">
                <form action="/Surat" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subjek:</label>
                        <input type="text" name="subjek" class="form-control" id="exampleInputPassword1" placeholder="Subjek" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No. Surat:</label>
                        <input type="text" name="nomorSurat" class="form-control" id="exampleInputPassword1" placeholder="Nomor Surat">
                    </div>
                    <div class="form-group mt-3">
                        <label for="isi">Isi SUrat :</label>
                        {{-- <input type="hidden" name="isi" id="isi"> --}}
                        <textarea id="textisi" name="textisi" style="height: 400px"></textarea>
                        @error('isi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">jumlah yang bertanda tangan:</label>
                        <input class="d-inline" type="number" name="jumlah" class="form-control" id="jumlah" placeholder="jumlah" >
                    </div>
                    <div id="TTD">
                        
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
                
            </li>
        </ul>
        <style>
            .print{
                width: 21cm;
                padding: 1cm;
                margin: 1cm auto;
                border: 1px #D3D3D3 solid;
                border-radius: 5px;
                background: white;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                clear: both;
            }
            #preview{
                box-shadow: inset 0px 0px 10px rgba(0,0,0,0.9);
            }
            *{
                box-sizing: border-box;
            }
        </style>
        <ul class="list-group list-group flex-column mb-auto mt-3">
            <li class="list-group-item bg-success text-white d-inline"> <div class="d-inline w-100"> <h1>Preview</h1> </div> <span><button onclick="Refresh()">Refresh</button></span></li>
            <li id="pre" class="list-group-item">
                <div id="preview" class="container-fluid" style="background-color: gray;">
                    <div class="print mb-5">
                        <div class="container Header pb-2" style="border-bottom: solid black 3px">
                            <div class="row">
                                <div class="col-auto"> <img src="/Gambar/Logo.png" alt="" style="height: 120px"></div>
                                <div class="col" style="text-align: center">
                                    <h4> <strong> YAYASAN AMAL IKHLAS AL-RIDWANI (YAIR)</strong></h4>
                                    <h5>MADRASAH DINIYAH ISLAMIYAH AL-RIDWANI</h5>
                                    <small>LingkokBaru, DesaSukadamai, Kec. Jerowaru Kab. Lombok Timur, NTB, Km 1,5Tangun-BatuNampar </small>
                                    <small>HP: 081918488744, 081933175101</small>
                                </div>
                            </div>
                        </div>
                        <div id="isiSurat">
                            
                        </div>
                        <div id="ttdSurat" class="d-flex flex-wrap" style="height: 200px">

                        </div>

                    </div>
                </div>
            </li>
        </ul>
    </main>
    <div id="ttdForm" class="m-3 d-none" style="100px">
        <ul class="list-group list-group flex-column mb-auto mt-3">
        <li class="list-group-item p-1 bg-success text-white"> TTD 1 </li>
        <li class="list-group-item p-1 px-3">
        <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <select class="form-control NameSelector">
                <option value="costum">costum</option>
                @foreach ($Anggotas as $anggota)
                    <option value="{{ $anggota->Nama }}">{{ $anggota->Nama }}</option>
                @endforeach
                <input type="text" name="Nama[]" class="form-control Nama" required>
            </select>
        </div>
        <div class="form-group">
            <label for="Sebagi">Sebagai</label>
            <input type="text" name="Sebagai[]" class="form-control Sebagai" id="Sebagai" placeholder="Sebagai" value="" required>
        </div>
        <div class="form-group">
            <label for="Seagai">Tempat</label>
            <input type="text" name="Tempat[]" class="form-control Tempat" id="Tempat" placeholder="Tempat" value="">
        </div>
        <div class="form-group">
            <label for="Tanggal">Tanggal</label>
            <input type="date" name="Date[]" class="form-control Tanggal" id="Tanggal" placeholder="Tanggal">
        </div>
        </li>
        </ul>
        
    </div>
    <div id="ttdtamplate">
        <div class="col m-3" style="height:100%; flex:40%; text-align:center">
            <div><span class="TempatttdAnggota"></span> , <span class="TanggaltdAnggota"></span></div>
            <p class="SebagaittdAnggota"></p>
            <img src="/TTD/noTTD.png" alt="" style="height:100px">
            <p><u><strong class="NamattdAnggota"></strong></u></p>
        </div>
    </div>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>
    <script>
        // This sample still does not showcase all CKEditor 5 features (!)
        // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
        CKEDITOR.ClassicEditor.create(document.getElementById("textisi"), {
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    'exportPDF','exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Welcome to CKEditor 5!',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [
                    {
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }
                ]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [
                    {
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }
                ]
            },
            // The "super-build" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                'MathType',
                // The following features are part of the Productivity Pack and require additional license.
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents'
            ]
        });
    </script>
    <script src="/js/Surat.js"></script>
@endsection