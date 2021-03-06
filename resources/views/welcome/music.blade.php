<section class="section3" id="section3">

    <div class="container">

        <!-- SECTION HEADING -->

        <div class="features">
            <!-- FEATURES ROW 2 -->
            <div id="html5_player">
                <h2 id="music_title">Dance Mix</h2>

                <!-- SINGLE FEATURE BOX -->

                <div class="row">
                    <div class="col-md-2"></div>

                    <div class="col-md-4">
                        <img id="music_cover" src="images/pic/copertina_cd.png" alt="CopertinaCD" class="img-responsive">
                    </div>

                    <div class="col-md-4">
                        <ul class="graphic" id="music_list">
                        </ul>
                    </div>
                </div>

            </div>
            <div id="flash_player">
                <h2 id="music_title">Dance Mix</h2>
                <div class="row">
                    <div class="col-md-12">

                        <embed  src="http://player.zimbalam.com/player/3614594597241/6/black/0/0/0/it/" quality="high" wmode="transparent"
                                pluginspage="http://www.maromedia.com/go/getflashplayer" type="application/x-shockwave-flash"
                                width="420" height="490" />

                    </div>
                </div>

            </div>
        </div>

        <script type="text/javascript">
            function remove(id) {
                return (elem=document.getElementById(id)).parentNode.removeChild(elem);
            }

            remove(!FlashDetect.installed ? "flash_player" : "html5_player");
        </script>

    </div> <!-- /END CONTAINER -->
</section>