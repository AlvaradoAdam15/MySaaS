@extends('layouts.app')

@section('htmlheader_title')
    Create Invoice
@endsection

@section('main-content')

    <style>
        .flyer-builder iframe,
        .flyer-builder .no_iframe {
            width: 100%;
            height: 400px;
            border: 1px solid #666;
            background-color: #ddd;
        }

    </style>

    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-10">
                <div class="container-fluid flyer-builder">
                    <h1>Invoice Builder</h1>
                    <div class="row">
                        <div class="col-sm-6 loc_form">

                            <div class="form-group">
                                <label for="flyer-image" class="control-label">Image</label>
                                <input id="flyer-image" type="file" tabindex="1">
                            </div>

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="flyer-title" class="control-label">Title</label>
                                        <input required class="form-control" id="flyer-title" placeholder="Main title" maxlength="255" type="text" tabindex="2">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="flyer-title-size" class="control-label">Size (pt)</label>
                                        <input required class="form-control" id="flyer-title-size" value="60" min="1" step="1" type="number" tabindex="3" title="Title size: tune it to fit the available space">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="flyer-title-color" class="control-label">Color</label>
                                        <input required class="form-control" id="flyer-title-color" value="#0080FF" type="color" tabindex="4" title="Title color">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="flyer-description">Description</label>
                                <textarea class="form-control" id="flyer-description" placeholder="Insert a short description taking care of the available space"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="flyer-price" class="control-label">Price</label>
                                        <input required class="form-control" id="flyer-price" placeholder="Enter price (w/o decimals)" value="100" type="number" tabindex="5" step="any" min="0">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="flyer-price-currency" class="control-label">Currency</label>
                                        <select required class="form-control" id="flyer-price-currency" tabindex="6">
                                            <option value="&euro;">&euro;</option>
                                            <option value="$">$</option>
                                            <option value="&pound;">&pound;</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="flyer-price-color" class="control-label">Color</label>
                                        <input required class="form-control" id="flyer-price-color" value="#cc0000" type="color" tabindex="8" title="Price color">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button onclick="preview()" id="flyer_preview_btn" type="button" class="btn btn-primary btn-block" tabindex="9">Update preview</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group text-right">
                                        <button onclick="download()" id="flyer_download_btn" type="button" class="btn btn-default btn-xs btn-block" tabindex="10">Download</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <iframe id="pdf_preview" type="application/pdf" src=""></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>

    <script>

        function generatePDF(){
            var pdf = new jsPDF('p', 'mm', 'a4');
            pdf.text(30, 30, 'Hello world!');
            return pdf;
        }


        function download() {
            var pdf = generatePDF();
            pdf.save(document.getElementById('flyer-title').value + '.pdf');
        }

        function preview() {
            var pdf = generatePDF();
            var string = pdf.output('datauristring');
            $('#pdf_preview').attr('src', string);
        }

    </script>

@endsection
