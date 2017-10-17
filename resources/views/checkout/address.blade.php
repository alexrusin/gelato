@extends('layouts.gelato-app')

@section('content')
    <div class="stepwizard">
        <div class="stepwizard-row">
            <div class="stepwizard-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled">1</button>
                <p></p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-primary btn-circle">2</button>
                <p></p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                <p></p>
            </div> 
            <div class="stepwizard-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled">4</button>
                <p></p>
            </div> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-horizontal" role="form">
            <fieldset>

              <!-- Form Name -->
              <legend>Shipping Information</legend>

               <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Name</label>
                <div class="col-sm-10">
                  <input type="text" id="name" name="name" placeholder="Full Name" class="form-control">
                </div>
              </div>

               <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="email-address">Email</label>
                <div class="col-sm-10">
                  <input type="email" id="email-address" name="email-address" placeholder="Email Address" class="form-control">
                </div>
              </div>

               <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="phone">Phone (optional)</label>
                <div class="col-sm-10">
                  <input type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="address-1">Address 1</label>
                <div class="col-sm-10">
                  <input type="text" id="address-1" name="address-1" placeholder="Address Line 1" class="form-control">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="address-2">Address 2</label>
                <div class="col-sm-10">
                  <input type="text" id="address-2" name="address-2" placeholder="Address Line 2" class="form-control">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="city">City</label>
                <div class="col-sm-10">
                  <input type="text" id="city" name="city" placeholder="City" class="form-control">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="state">State</label>
                <div class="col-sm-4">
                  <input type="text" id="state" name="state" placeholder="State" class="form-control">
                </div>

                <label class="col-sm-2 control-label" for="zip-code">Zip Code</label>
                <div class="col-sm-4">
                  <input type="text" id="zip-code" name="zip-code" placeholder="Post Code" class="form-control">
                </div>
              </div>



              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="country">Country</label>
                <div class="col-sm-10">
                  <input type=text disabled="disabled" name= "country" id="country" class="form-control" value="United States of America"></input>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="pull-right">
                    <a href="{{url(route('store'))}}" id="cancel-order" data-order-id="{{$order->id}}" type="submit" class="btn btn-danger" style="margin-right:10px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Continue</button>
                  </div>
                </div>
              </div>

            </fieldset>
          </form>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
@endsection