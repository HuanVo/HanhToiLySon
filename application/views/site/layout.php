<html dir="ltr" lang="vi">
    <head>
        <?php $this->load->view('site/head'); ?>
        
    </head>
    <body id="offcanvas-container" class="offcanvas-container common-home page-common-home layout-fullwidth">
        <script>
           function clicking(id)
           {
                var ids = $('base').attr('href') +'cart/add/'+id;
                //window.open(ids); 
                window.location.href = ids;
            }
        </script>
        <section class="row-offcanvas row-offcanvas-left offcanvas-pusher">
            <div id="page">
                <!--header-->
                <header id="header">
                
                
                    <!--header top-->
                    <div id="topbar">
                        <?php $this->load->view('site/topbar'); ?>
                    </div>
                    <!--end header top-->

                    <!--main header-->
                    <div id="header-main">
                          <?php $this->load->view('site/headermain'); ?>
                    </div>
                    <!--end main header-->

                    <!--main menu-->
                    <div id="pav-mainnav">
                        
                        <?php $this->load->view('site/menumain'); ?>
                    </div>
                    <!--endmain menu-->
                </header>
                <!--end header-->
                
             <div id="sys-notification">
                <div class="container">
                    <div id="notification">
                      <?php $this->load->view('site/message'); ?>
                    </div>
                   
                </div>
            </div>
                
                 <!-- container-->
                <div class="container">
                    <div class="row">
                        <?php $this->load->view('site/left'); ?>
                        <?php $this->load->view($temp);?>
                        <?php $this->load->view('site/right'); ?>
                    </div>
                </div>
                 <!-- end container-->
                <div class="mass-bottom" id="pavo-mass-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box clearfix">
                                    <div class="pts-container">
                                        <div class="pts-inner">
                                            <div class="row row-level-1">
                                                <div class="row-inner clearfix">
                                                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                 <!-- footer-->
                <footer id="footer">
                   <div class="footer-top" id="pavo-footer-top">
                       <?php $this->load->view('site/footer/footertop'); ?>
                   </div>
                   <div class="footer-center" id="pavo-footer-center">
                       <?php $this->load->view('site/footer/footercenter'); ?>
                   </div>
                   <!--bottom have nothing-->
                   <div class="footer-bottom " id="pavo-footer-bottom">
                       <div class="container">
                           <div class="row">
                              

                           </div>
                       </div>
                   </div>
               </footer>
                  <!-- end footer-->
                 <!-- Nha thiet ke-->
                 <div id="powered">
                      <?php $this->load->view('site/footer/powered'); ?>
                 </div>
                 
                 
            </div>
        </section>
    </body>



</html>