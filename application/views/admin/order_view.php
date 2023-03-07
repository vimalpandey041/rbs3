<?php include_once'inc/header.php';?>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          
          <?php if($this->session->flashdata('shipping_msg')){ ?>
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?=$this->session->flashdata('shipping_msg');?>
            </div>
          <?php } ?>
          
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">ORDER DETAILS (<?=$order->order_id?>)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <tbody>
                    <tr>
                      <td>Product Details</td>
                      <td>
                      <?php $product = $this->db->where('pid', $order->pid)->get('products')->row();?>
                      <a href="<?=base_url('product');?>/<?=$product->purl;?>"><b><?=$product->title;?></b></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Product Price</td>
                      <td class="font-weight-bold">Rs. <?=$order->price;?></span></td>
                    </tr>
                    <tr>
                      <td>Product Qty</td>
                      <td><span class="badge bg-warning" style="font-size:18px;"><?=$order->qty;?></span></td>
                    </tr>
                    <tr>
                      <td>TOTAL COST (18% GST Include)</td>
                      <td class="font-weight-bold">Rs. <?=$order->tprice;?></td>
                    </tr>
                    <tr>
                      <td>PAYMENT STATUS</td>
                      <td class="font-weight-bold"><?=$order->payment_status;?></td>
                    </tr>
                    <tr>
                      <td>PAYMENT MOD</td>
                      <td class="font-weight-bold"><?=$order->payment_mod;?></td>
                    </tr>
                    <tr>
                      <td>ORDER DATE</td>
                      <td class="font-weight-bold"><?=$order->date;?></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              
              
            </div>
        </div>
        
        <!-- customer detials -->
        <div class="row">
          <div class="col">
              
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">CUSTOMER DETAILS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <tbody>
                    <tr>
                      <td>Customer Name</td>
                      <td>
                      <?php $customer = $this->db->where('customer_id', $order->customer_id)->get('customer')->row();?>
                      
                      <b><?=$customer->name;?></b>
                      </td>
                    </tr>
                    <tr>
                      <td>Customer Address</td>
                      <td class="font-weight-bold">
                          <?=$customer->house;?>, <?=$customer->area;?>, <?=$customer->city;?>, <?=$customer->state;?>
                          </td>
                    </tr>
                    <tr>
                      <td>Contact no.</td>
                      <td><span class="badge bg-info" style="font-size:18px;"><?=$customer->mobile;?></span></td>
                    </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              
              
            </div>
        </div>
        
        <!--shipping details-->
        <div class="row">
            <div clas="col-lg-12 ml-2" style="max-width:500px;width:100%;">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Shipping Status</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?=form_open("admin/order_view/$order->order_id");?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRACKING NO. (optional)</label>
                    <input type="text" class="form-control" placeholder="tracking_no" name="tracking_no">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="shipping_status">
                    <option value="shipped">Choose</option>
                    <option value="dispatched">Dispatched</option>
                    <option value="pending">Pending</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
        </div>
        
        </div>
    </div>    
<?php include_once'inc/footer.php';?>