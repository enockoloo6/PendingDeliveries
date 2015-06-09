 
  
    <script type="text/javascript">

     function validateFundingAgency()
     {
      
      var x=document.forms["FundingArgencyName"]["funding_agency_name"].value;
      var y=document.forms["FundingArgencyName"]["funding_agency_description"].value;

        if ((x==null || x=="") && (y==null || y==""))
         {
          alert("All Field must be filled out");
          return false;
         }
        if (x==null || x=="")
         {
          alert("Input the funding agency name");
          return false;
         }
        if (y==null || y=="")
         {
          alert("Include decription");
          return false;
         }
     }
    </script>
    <!--this is a script for validating the input in to the registration form-->
    <script type="text/javascript">

    function validateSupplyAgency()
    {
    var a=document.forms["reg"]["supply_agency_name"].value;
    var b=document.forms["reg"]["contact_person"].value;
    var c=document.forms["reg"]["contact_phone"].value;
    var d=document.forms["reg"]["supply_chain_description"].value;


    
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("Please include the name of the supply agency");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Please inlude the contact person");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Please include the contact phone");
    return false;
    }
    if (d==null || d=="")
    {
    alert("Please include the description");
    return false;
    }   
    }
    </script>
 

<!-- c--------------------------------------Supply Agency Reg form-----------------f--------------------------------------------------------------c  -->
   
      <div class= "modal fade" id="SupplyAgencyRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
      
       <form class="form-horizontal" role="form" name="reg" action="<?= base_url();?>index.php/agencyhomecontroller/save" onsubmit="return validateSupplyAgency()" method="post" enctype="multipart/form-data" autocomplete="on">
          <!--<form class= "form-horizontal"  name="reg" action="sign-up.php" onsubmit="return validateSupplyAgency()" method="post" enctype="multipart/form-data" autocomplete="on">-->  
            <div class= "modal-header">
              <h4 class= "position" >Add a supply chain agency</h4>              
              <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>X</b></div>  
            </div>
    

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Agency Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="supply_agency_name" placeholder="Supply agency name"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Contact person: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="contact_person" placeholder="Contact person"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Contact Phone </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="contact_phone" placeholder="Contact phone"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="supply_chain_description" placeholder="Add description"></textarea>                
                </div>                
              </div> 

              <?php if(isset($message)){?>              
              <div class="col-lg-12"><div class="alert alert-success"><div class="col-lg-3"></div><?=$message?></div></div>              
              <?php }?>


               
            </div> <!--end of the modal body-->




            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
        </div>
      </div>
    </div>
    
<!--  -----------------------------------------Funding Agency Form---------------------------------------------------------------------------------------------------------------     -->



      <div class= "modal fade" id="FundingAgencyRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
          <form class= "form-horizontal"  name="FundingArgencyName" action="<?= base_url();?>index.php/agencyhomecontroller/saveFundingAgency" onsubmit="return validateFundingAgency()" method="post" enctype="multipart/form-data" autocomplete="on">  
            <div class= "modal-header"> 

              <h4 class= "position" >Add a funding Agency</h4> 
              <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>X</b></div>              
               
            </div>   

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Funding Agency Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="funding_agency_name" placeholder="Funding agency name"> <!--the form-control gives the form some styling-->
                </div>
              </div>


               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="funding_agency_description" placeholder="Add description"></textarea>                
                </div>                
              </div>  

              <?php if(isset($funding_agency_message)){?>              
              <div class="col-lg-12"><div class="alert alert-success"><div class="col-lg-3"></div><?=$funding_agency_message?></div></div>              
              <?php }?>


                              
            </div> <!--end of the modal body-->

            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-------------------------------------------Pending Stock form-------------------------------------------------------->




    <script type="text/javascript">
    //load datepicker control onfocus
    $(function() {
        $("#deliverydate").datepicker();
    });
    </script>




<div class= "modal fade" id="PendingStock" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
          <form class= "form-horizontal"  name="StaticParams" action="<?= base_url();?>index.php/agencyhomecontroller/savePendingDeliveries" onsubmit="return validateStaticrams()" method="post" enctype="multipart/form-data" autocomplete="on">  
          
            <div class= "modal-header">
              <h4 class= "position" >Add Pending Stocks</h4> 
              <!-- <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>×</b></div>    -->
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>         
            </div>   

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-5 control-label">Period: </label>
                <div class= "col-lg-7">
                  <input type="text" class="form-control" name="period" placeholder="Period"> <!--the form-control gives the form some styling-->
                </div>
              </div>

              
               <div class "form-group">
                <label for="commodity-name" class="col-lg-5 control-label"> Commodity Name: </label>
                <div class= "col-lg-7">
                  <input type="text" class="form-control" name="commodity_name" placeholder="Commodity Name">
                </div>                
              </div>  


                <div class "form-group">
                <label for="contact-msg" class="col-lg-5 control-label"> Pack Size: </label>
                <div class= "col-lg-7">
                  <input type="text" class="form-control" name="pack_size" placeholder="Pack Size">
                </div>                
              </div>  

                 <div class "form-group">
                <label for="contact-msg" class="col-lg-5 control-label"> Funding Agency: </label>
                <div class= "col-lg-7">
                  <input type="text" class="form-control" name="funding_agency" placeholder="Funding Agrncy">
                </div>                
              </div>  

                <div class "form-group">
                <label for="contact-msg" class="col-lg-5 control-label"> Pending Deliveries: </label>
                <div class= "col-lg-7">
                  <input type="text" class="form-control" name="pending_deliveries" placeholder="Pending Deliveries">
                              
                </div>                
              </div> 


                <div class "form-group">
                <label for="expected_date_delivery" class="col-lg-5 control-label"> Expected Delivery Date: </label>
                <div class= "col-lg-7">
                  <input id="expected_date_delivery" type="text" readonly="readonly" class="form-control clsDatePicker" name="expected_date_delivery" placeholder="Expected Delivery Date" <span class="input-group-addon" >
                              
                </div>                
              </div>





                    <label for="idTourDateDetails" class="col-lg-5 control-label">Tour Start Date:</label>
                        <div class="form-group col-lg-7">
                            <div class="input-group">
                                <input type="text" name="idTourDateDetails" id="idTourDateDetails" readonly="readonly" class="form-control clsDatePicker"> <span class="input-group-addon"><i id="calIconTourDateDetails" class="glyphicon glyphicon-th"></i></span>

                            </div>
                        </div>
                        <label class="col-lg-5 control-label">Alt Field:</label> 
                        <div class= "col-lg-7">
                        <input type="text" name="idTourDateDetailsHidden" id="idTourDateDetailsHidden">
                        </div>
       


               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="pddescription" placeholder="Add description"></textarea>                
                </div>                
              </div>  


                </div> <!--end of the modal body-->
           
            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
         



        </div>
      </div>
    </div>

     <!-------------------------------------------Static Parameters Form---------------------------------------------------------------->

    <div class= "modal fade" id="StaticParameters" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
          <form class= "form-horizontal"  name="StaticParams" action="<?= base_url();?>index.php/agencyhomecontroller/saveStaticParams" onsubmit="return validateStaticParams()" method="post" enctype="multipart/form-data" autocomplete="on">  
           
            <div class= "modal-header"> 
              <h4 class= "position" >Adjust Static Parameters</h4> 
              <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>X</b></div>      
               
            </div>   

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Period: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="period" placeholder="Period"> <!--the form-control gives the form some styling-->
                </div>
              </div>


               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Commodity Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="commodity_name" placeholder="Commodity Name">
                </div>                
              </div>  


                <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Pack Size: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="pack_size" placeholder="Pack Size">
                </div>                
              </div>  

                 <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> PMC: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="projected_monthly_consumption" placeholder="Projected Monthly Consmption">
                </div>                
              </div>  

                <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> AMC: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="average_monthly_consumption" placeholder="Average Mothly Consupmtion">
                              
                </div>                
              </div>  

                </div> <!--end of the modal body-->
           
            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
         



        </div>
      </div>
    </div>
