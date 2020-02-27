<?php 

  //include header file
  include ('include/header.php');

?>
	<body>
 		<div class="container-fluid">
        	<div class="row head">
        	
            	<div class="col-md-8"><img align="left" src="image/blod.png" class="rounded-circle" width="150px" height="130px " >
            		<h1 class="text-center abc">BLOOD BANK MANAGEMENT SYSTEM</h1>
            			</div>
            	
            

            	<div class="col-md-4" align="left">
                    	<nav class="navbar navbar-expand-sm">
                            <form class="form-inline" action="login.php" method="POST">
                              <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            	<span> <button class="btn btn-danger" type="submit">Search</button></span>
                            </form>
                    	</nav>
            	</div>
        	</div>
    	</div>
      <?php
       include('include/header1.php'); 
       ?>

   		<div class="container-fluid header-img">
          <div class="row1">
            <div class="col-md-6 offset-md-3">
              <div class="header">
                <h1 class="text-center">Donate the blood, Save</h1><h1 class="text-center"> the life</h1>
              </div>
              <h1 class="text-center">Search the Donors</h1>
              <hr class="White-bar text-center"/>
              <form class="form-inline text-center" style="padding:40px 0px 0px 5px;" action="search.php" method="get">
                <div class="form-group text-center justify-content-center">
                  <select name="city" class="form-control demo-default " id="city" style="width: 220px; height:45px;" required>
                    <option value="">--Select--</option>
                    <option value="1">Bhaktapur           </option>
                   <option value="2">Dhading             </option>
                   <option value="3">Kathmandu           </option>
                    <option value="4">Kavrepalanchok      </option>
                  	<option value="5">Lalitpur            </option>
                  	<option value="6">Nuwakot             </option>
                  	<option value="7">Rasuwa              </option>
                  	<option value="8">Sindhupalchok       </option>
                  	<option value="9">Banke               </option>
	                  <option value="10">Bardiya             </option>
	<option value="11">Dailekh             </option>
	<option value="12">Jajarkot            </option>
	<option value="13">Surkhet             </option>
	<option value="14">Baglung             </option>
	<option value="15">Mustang             </option>
	<option value="16">Myagdi              </option>
	<option value="17">Parbat              </option>
	<option value="18">Gorkha              </option>
	<option value="19">Kaski               </option>
	<option value="20">Lamjung             </option>
	<option value="21">Manang              </option>
	<option value="22">Syangja             </option>
	<option value="23">Tanahu              </option>
	<option value="24">Dhanusa             </option>
	<option value="25">Dolakha             </option>
	<option value="26">Mahottari           </option>
	<option value="27">Ramechhap           </option>
	<option value="28">Sarlahi             </option>
	<option value="29">Sindhuli            </option>
	<option value="30">Dolpa               </option>
	<option value="31">Humla               </option>
	<option value="32">Jumla               </option>
	<option value="33">Kalikot             </option>
	<option value="34">Mugu                </option>
	<option value="35">Bhojpur             </option>
	<option value="36">Dhankuta            </option>
	<option value="37">Morang              </option>
	<option value="38">Sankhuwasabha       </option>
	<option value="39">Sunsari             </option>
	<option value="40">Terhathum           </option>
	<option value="41">Arghakhanchi        </option>
	<option value="42">Gulmi               </option>
	<option value="43">Kapilvastu          </option>
	<option value="44">Nawalparasi         </option>
	<option value="45">Palpa               </option>
	<option value="46">Rupandehi           </option>
	<option value="47">Baitadi             </option>
	<option value="48">Dadeldhura          </option>
	<option value="49">Darchula            </option>
	<option value="50">Kanchanpur          </option>
	<option value="51">Ilam                </option>
	<option value="52">Jhapa               </option>
	<option value="53">Panchthar           </option>
	<option value="54">Taplejung           </option>
	<option value="55">Bara                </option>
	<option value="56">Chitwan             </option>
	<option value="57">Makwanpur           </option>
	<option value="58">Parsa               </option>
	<option value="59">Rautahat            </option>
	<option value="60">Dang                </option>
	<option value="61">Pyuthan             </option>
	<option value="62">Rolpa               </option>
	<option value="63">Rukum               </option>
	<option value="64">Salyan              </option>
	<option value="65">Khotang             </option>
	<option value="66">Okhaldhunga         </option>
	<option value="67">Saptari             </option>
	<option value="68">Siraha              </option>
	<option value="69">Solukhumbu          </option>
	<option value="70">Udayapur            </option>
	<option value="71">Achham              </option>
	<option value="72">Bajhang             </option>
	<option value="73">Bajura              </option>
	<option value="74">Doti                </option>
	<option value="75">Kailali             </option>

                    
                   
                    
                  </select>
                </div>
              
                  <div class="form-group center-aligned">
                    <select name="blood_group" class="form-control demo-default text-center margin10px"id="blood_group" style="  padding 0 20px;width:220px;height:45px;">
                       <option value="">--Select--</option> 
                       <option value="A+">A+</option>
                       <option value="A-">A-</option>
                       <option value="AB+">AB+</option>
                       <option value="AB-">AB-</option>
                       <option value="B+">B+</option>
                       <option value="B-">B-</option>
                       <option value="O+">O+</option>
                       <option value="O-">O-</option>
                    </select></div>
                    <div class="form-group center-aligned">
                      <button class="btn btn-lg btn-danger" type="submit"><i class="fa fa-search" ></i>Search</button>
                    </div>

                  
                  
                </form>
            </div>
          </div>
        </div>
        <!--middle part --> 
        <div class="container-fluid red-background">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center"style="color:white">Donate The Blood</h1>
              <hr class="White-bar text-center"/>
              <p class="text-center pera-text">A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood, or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.

              Today in the developed world, most blood donors are unpaid volunteers who donate blood for a community supply. In some countries, established supplies are limited and donors usually give blood when family or friends need a transfusion (directed donation). Many donors donate as an act of charity, but in countries that allow paid donation some donor are paid, and in some cases there are incentives other than money such as paid time off from work. Donors can also have blood drawn for their own future use (autologous donation). Donating is relatively safe, but some donors have bruising where the needle is inserted or may feel faint.</p>
            </div>
          </div>
        </div>

  <?php 

  //include header file
  include ('include/footer1.php');

?>