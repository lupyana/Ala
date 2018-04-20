@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <!-- <small>Optional description</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content admin-content">

<div class="row">
  <div class="col-md-8">
      <div class="box box-info">
        <div class="box-header with-border"><h3 class="box-title">Song Requests</h3> <div class="box-tools pull-right"><button type="button" data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button> <button type="button" data-widget="remove" class="btn btn-box-tool"><i class="fa fa-times"></i></button></div></div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Song Artist</th>
                  <th>Song Name</th>
                  <th>Status</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                   <td>Call of Duty IV</td>
                   <td>Call of Duty IV</td>
                   <td><span class="label label-success">Shipped</span></td>

                 </tr>

                </tbody>
              </table>
            </div>
          </div>
        <!-- <div class="box-footer clearfix"><a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a> <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a></div> -->
      </div>
  </div>

  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Recently Added </h3>
        <div class="box-tools pull-right">
          <button type="button" data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
          <button type="button" data-widget="remove" class="btn btn-box-tool"><i class="fa fa-times"></i></button>
        </div>
      </div>
     <div class="box-body">
       <ul class="products-list product-list-in-box">

         @foreach( $songs as $song)

         <li class="item">
           <div class="product-img">
             <img src="{{ asset('admin/img/default-50x50.gif') }}" alt="Product Image">
           </div>
           <div class="product-info">
             <a href="javascript:void(0)" class="product-title">{{ $song ->name }}<span class="label label-important pull-right">{{ $song->views}}</span></a>
             <span class="product-description">{{ $song ->artist -> name}} </span>
            </div>
          </li>

           @endforeach



      </ul>
    </div>

    <div class="box-footer text-center"><a href="javascript:void(0)" class="uppercase">View All </a></div>
  </div>

  </div>

</div>

  </section>
  <!-- /.content -->
</div>

@endsection
