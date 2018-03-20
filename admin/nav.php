

 
         <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a <? if(empty($bas)){echo 'class="active-menu"';}?>  href="index.php"><i class="fa fa-dashboard"></i> Anasayfa</a>
                    </li>
					
					
				<li <? if($bas=='urunekle' or $bas=='urunlistesi' ){echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-sitemap"></i> Ürünler<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <? if($bas=='urunekle'){echo 'class="active-menu"';}?>>
                                <a href="urunekle.php">Ürün Ekle</a>
                            </li>
                            <li <? if($bas=='urunlistesi'){echo 'class="active-menu"';}?>>
                                <a href="urunlistesi.php">Ürünler</a>
                            </li>
							
                            
                        </ul>
                    </li>	
						<li <? if($bas=='kategoriekle' or $bas=='kategorilist' ){echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-sitemap"></i> Kategoriler<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <? if($bas=='kategoriekle'){echo 'class="active-menu"';}?>>
                                <a href="categories.php">Kategori Ekle</a>
                            </li>
                            <li <? if($bas=='kategorilist'){echo 'class="active-menu"';}?>>
                                <a href="categorieslist.php">Kategori Listesi</a>
                            </li>
						
                            
                        </ul>
                    </li>	
					<li  <? if($bas=='referans' ){echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-sitemap"></i> Referanslar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <? if($bas=='referans'){echo 'class="active-menu"';}?>>
                                <a href="referanslar.php">Referanslar</a>
                            </li>
                            
                            
                        </ul>
                    </li>	

						
					<li  <? if($bas=='kesif' ){echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-sitemap"></i> Ücretsiz Keşif<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <? if($bas=='kesif'){echo 'class="active-menu"';}?>>
                                <a href="kesif.php">Keşif Listesi</a>
                            </li>
                            
                            
                        </ul>
                    </li>	

						
							
					<li  <? if($bas=='yazilistesi' or $bas=='yaziekle'){echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-sitemap"></i> Yazılar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <? if($bas=='yaziekle'){echo 'class="active-menu"';}?>>
                                <a href="yaziekle.php">Yazı Ekle</a>
                            </li>
                            <li <? if($bas=='yazilistesi'){echo 'class="active-menu"';}?>>
                                <a href="yazilistesi.php">Yazılar</a>
                            </li>
                            
                        </ul>
                    </li>	
					
					
<li  <? if($bas=='settings'){echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-sitemap"></i> Ayarlar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li <? if($bas=='settings'){echo 'class="active-menu"';}?>>
                                <a href="settings.php">Site Bilgileri</a>
                            </li>
							
                            
                        </ul>
                    </li>						
					
                      <li><a href="cikis.php"><i class="fa fa-sign-out fa-fw"></i> Çıkış Yap</a>
                        </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->