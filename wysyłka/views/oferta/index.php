
<?php 
$dbh = new PDO('mysql:host=localhost;dbname=shareboard', 'root', '');

$sth = $dbh->prepare("SELECT path FROM normal_images ");
$sth->execute();


$result = $sth->fetchAll();


?>

<div class="row mt-2 ml-2" id="path">
                  <div class="col-sm-8" style="font-size:14px">
                        <a href="">Oferta</a>
                        
                  </div>
            </div>


      <div class="container p-0" id="oferta-page" style="margin-bottom:150px">
                  <div class="row p-0 text-center">
                              <div id="heading">
                                    <h2>Oferta</h2>
                                    <hr>
                                    <p>DOBRY & PROSTY WYBÓR</p>
                              </div>
                        </div>
                        <div class="row">
                              <p class="text-center" style="width:50%; margin:auto;">Nasza firma wychodzi na przeciw najwyższym wymaganiom klientów. Wieloletnie doświadczenie sprawia, że znamy
                                    się na tym co robimy, a co ważniejsze kochamy to. Nasza firma jest firmą rodzinną dlatego tak jak
                                    nikt inny dbamy o to by klient był usatysfakcjonowany. Jeżeli wybór jest prosty to jest i zarazem
                                    satysfakcjonujący
                              </p>
                        </div>
            <div class="row" style="margin-top:200px;">
                  <div class="col-sm-8 ">
                        <div class="row">
                              <div class="cat1 cat-img ">
                                    <a href="dzienbabciidziadka">
                                          <div class="cat-img-wrapp">
                                                <img src="<?php echo ROOT_PATH; print_r($result[0]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                <div class="ovrlyT"></div>
                                                <div class="ovrlyB"></div>
                                                <div class="cat-img-hov">Dzień Babci / Dzień Dziadka</div>
                                          </div>
                                    </a>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-sm-6 p-0">
                                    <div class="cat3 cat-img">
                                          <a href="dzienmatki">
                                                <div class="cat-img-wrapp">
                                                      <img src="<?php echo ROOT_PATH; print_r($result[2]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                      <div class="ovrlyT"></div>
                                                      <div class="ovrlyB"></div>
                                                      <div class="cat-img-hov">Dzień matki</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-sm-6 p-0">
                                    <div class="cat4 cat-img">
                                          <a href="walentynki">
                                                <div class="cat-img-wrapp">
                                                      <img src="<?php echo ROOT_PATH; print_r($result[3]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                      <div class="ovrlyT"></div>
                                                      <div class="ovrlyB"></div>
                                                      <div class="cat-img-hov">Walentynki</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-sm-12 p-0">
                                    <div class="cat5 cat-img">
                                          <a href="przeprosiny">
                                                <div class="cat-img-wrapp">
                                                      <img src="<?php echo ROOT_PATH; print_r($result[4]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                      <div class="ovrlyT"></div>
                                                      <div class="ovrlyB"></div>
                                                      <div class="cat-img-hov">Przeprosiny</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                        </div>


                        <div class="row">
                              <div class="col-sm-6 p-0">
                                    <div class="cat7 cat-img">
                                          <a href="podziekowanie">
                                                <div class="cat-img-wrapp">
                                                      <img src="<?php echo ROOT_PATH; print_r($result[6]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                      <div class="ovrlyT"></div>
                                                      <div class="ovrlyB"></div>
                                                      <div class="cat-img-hov">Podziękowanie</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>

                              <div class="col-sm-6 p-0">
                                    <div class="cat8 cat-img">
                                          <a href="imieninyurodziny">
                                                <div class="cat-img-wrapp">
                                                      <img src="<?php echo ROOT_PATH; print_r($result[7]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                      <div class="ovrlyT"></div>
                                                      <div class="ovrlyB"></div>
                                                      <div class="cat-img-hov">Imieniny Urodziny</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-sm-4">
                        <div class="row">
                              <div class="cat2 cat-img">
                                    <a href="wesele">
                                          <div class="cat-img-wrapp">
                                                <img src="<?php echo ROOT_PATH; print_r($result[1]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                <div class="ovrlyT"></div>
                                                <div class="ovrlyB"></div>
                                                <div class="cat-img-hov">Wesele</div>
                                          </div>
                                    </a>
                              </div>
                        </div>
                        <div class="row">
                              <div class="cat6 cat-img">
                                    <a href="rocznice">
                                          <div class="cat-img-wrapp">
                                                <img src="<?php echo ROOT_PATH; print_r($result[5]['path']); ?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                <div class="ovrlyT"></div>
                                                <div class="ovrlyB"></div>
                                                <div class="cat-img-hov">Rocznice</div>

                                          </div>
                                    </a>
                              </div>
                        </div>
                        <div class="row">
                              <div class="cat9 cat-img">
                                    <a href="dzienkobiet">
                                          <div class="cat-img-wrapp">
                                                <img src="<?php echo ROOT_PATH; print_r($result[8]['path']);?>" class="img-fluid" class="imgOfcat-img" alt="">
                                                <div class="ovrlyT"></div>
                                                <div class="ovrlyB"></div>
                                                <div class="cat-img-hov">Dzień Kobiet</div>
                                          </div>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-sm-12 p-0">
                        <div id="cat-surprise" class="cat-img" style="margin-top:40px">
                              <div class="cat-img-wrapp">
                                    <div id="pasBukietow"></div>
                                    <div class="ovrlyT"></div>
                                    <div class="ovrlyB"></div>
                                    <div class="cat-img-hov" style="letter-spacing:3px; ">BUKIET NIESPODZIANKA</div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <div class="container p-0" id="surprise-page">
            <div class="row p-0 text-center">
                  <div id="heading">
                        <h2>Bukiet niespodzianka</h2>
                        <hr>
                        <p>DLA NIEZDECYDOWANYCH</p>
                  </div>
            </div>
            <div class="row">
                  <p class="text-center" style="width:50%; margin:auto;">Nie możesz się zdecydować jakie kwiaty wręczyć? Przejrzałeś konkretną kategorię, ale nie możesz się zdecydować?
                        Wypełnij formularz, a my dobierzemy tak kwiaty, abyś był zadowolony z zakupu.
                  </p>
            </div>

            <form action="#" id="SWform">
                  <p id="selfWriting" class="text-center">
                  </p>
                  <input type="submit" value="Wyślij" id="surprise-submit">
            </form>
            <div id="alercik">
                  <p>Zadzwonimy do Ciebie ze specjalnie dobranym bukietem.</p>
            </div>

      </div>