<div class="site-footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Tentang Kami<span class="text-primary">.</span> </h3>
                    <p>{!! $about->description !!}</p>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-lg-4">
                <div class="widget">
                    <h3>Hubungi Kami</h3>
                    <address>{{ $contact->address }}</address>
                    <ul class="list-unstyled links mb-4">
                    <li><a href="tel://11234567890">{{ $contact->phone_number }}</a></li>
                    <li><a href="mailto:info@mydomain.com">{{ $contact->email }}</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Pesantren Tahfizul Quran Darul Qolam.</a>
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->
