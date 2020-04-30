@extends('layouts.nav')
@section('title', 'Pin confirmation')
    @section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-xs-12">
            <div class="card my-5">
                <div class="card-header text-center">Disclaimer for the use of template</div>
                    <div class="card-body">
                        <div class="footer-copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="copyright text-center">
                                            <h4 class="text">Template Designed  by <a href="https://graygrids.com/" rel="nofollow">GrayGrids</a>. All Rights Reserved by Us</h4>
                                      <p>We acknowledge the great work of <a href="https://graygrids.com/" rel="nofollow">GrayGrids</a> in designing this template, it was downloaded and customized
                                    to meet our own needs, all rights are Reserved by them as regards to the front-end use of css and javascript of this  template.

                                    </p>
                                        </div> <!-- copyright -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- container -->
                    </section>
                </div>
                <div class="card-footer text-center">&copy; 2019 - {{ date('Y') }}, RCCG Junior Church, All rights reserved...</div>
            </div>
        </div>
    </div>
@endsection
