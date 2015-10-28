<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
    
    <div class="form-group">
      <legend>Upload a new item</legend>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="row">

        <div class="form-group">
           <label class="col-sm-4 col-md-4 control-label">Name</label>
           <div class="col-sm-18 col-sm-offset-2">
             <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
           </div>
         </div>

         <div class="form-group">
            <label class="col-sm-4 col-md-3 control-label">Quantity</label>
            <div class="col-sm-18 col-sm-offset-3">
              <select name="" id="input" class="form-control" required="required">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
              </select>
            </div>
          </div>

          <div class="form-group">
             <label class="col-sm-4 col-md-3 control-label">Category</label>
             <div class="col-sm-18 col-sm-offset-3">
               <select name="" id="input" class="form-control" required="required">
                  <option value="1">History</option>
                  <option value="2">Potrait</option>
                  <option value="3">Genre painting</option>
                  <option value="4">Landscape</option>
                  <option value="5">Still life</option>
               </select>
             </div>
           </div>

      </div>
    </div>

    <div class="col-xs-11 col-sm-11 col-md-11 col-md-offset-1 col-lg-11">

        <div class="form-group">
           <label class="col-sm-4 col-md-4 control-label">Price</label>
           <div class="col-sm-18 col-sm-offset-2">
             <input type="text" class="form-control" id="" placeholder="Price">
           </div>
        </div>
        <div class="form-group">
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
             <label for="textarea" class="control-label">About Artist</label>
             <textarea name="" id="textarea" class="form-control" rows="3" required="required"></textarea>
            </div>
          </div>

          <div class="form-group">
              <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
               <label for="textarea" class="control-label">About the Art</label>
               <textarea name="" id="textarea" class="form-control" rows="3" required="required"></textarea>
              </div>
            </div>
    </div>
    <div class="form-group">
       <label class="col-sm-4 col-md-4 control-label">Upload photo</label>
       <div class="col-sm-18 col-sm-offset-2">
         <input type="file" class="filestyle" data-buttonName="btn btn-primary" style="padding-top:4px;">
       </div>
    </div>
    <div class="form-group">
      <div class="col-sm-20 col-sm-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>


</form>
</div>
<script type="text/javascript">
  $(":file").filestyle({buttonName: "btn-primary"});
</script>