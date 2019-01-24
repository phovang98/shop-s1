@extends('layouts.app-admin')
@section('title','Danh sách đơn hàng')
@section('content')
    <div class="box">
        {{--<div class="box-header">--}}
            {{--<div>--}}
                {{--<form action="" method="get" class="col-sm-4 row">--}}
                    {{--<!-- Search form -->--}}
                    {{--<div class="input-group input-group-sm">--}}
                        {{--<input type="text" class="form-control" name="keyword" value="{{$keyword}}">--}}
                        {{--<span class="input-group-btn">--}}
                          {{--<button type="submit" class="btn btn-info btn-flat">Search</button>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <img src="{{ asset($invoice->product->image) }}" alt="{{$invoice->product->name}}" width="100">
                            <a href="javascript:;">{{ $invoice->product->name }}</a>
                        </td>
                        <td>{{number_format($invoice->unit_price)}}</td>
                        <td>{{$invoice->quantity}}</td>
                        <td>{{number_format($invoice->quantity * $invoice->unit_price)}}</td>
                        <td>
                            @if($invoice->status == 1)
                                <div class="text-primary">Chờ xử lý</div>
                            @elseif($invoice->status == 2)
                                <div class="text-success">Đã gửi hàng</div>
                            @else
                                <div class="text-danger">Hủy</div>
                            @endif
                        </td>
                        <td>
                            <a href="javascript:;" linkUrl="{{ route('invoice.remove',[$invoice->invoice_id,$invoice->product_id]) }}" title="Delete" class="btn btn-danger btn-sm btn-remove"><i class="fa fa-times"></i></a>
                            <button type="button" class="btn btn-sm btn-success btn-modal" data-toggle="modal" data-target="#modal-edit"
                                    data-product-id="{{$invoice->product_id}}" data-invoice-id="{{$invoice->invoice_id}}" data-product-name="{{$invoice->product->name}}"
                                    data-product-image="{{asset($invoice->product->image)}}" data-quantity="{{$invoice->quantity}}"
                                    data-price="{{$invoice->unit_price}}" data-status="{{$invoice->status}}">
                                Cập nhật đơn hàng
                            </button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="7" class="text-center">
                        {{ $invoices->links() }}
                    </td>
                </tr>

                </tbody></table>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="modal fade" id="modal-edit" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Cập nhật đơn hàng</h4>
                </div>
                <div class="form-group center-block">
                    <img class="center-block" id="product_image" src="" alt="" width="300">
                </div>
                <div class="form-group text-center">
                    <h4><a id="product_name" href="javascript:;"></a></h4>
                </div>
                <form action="{{route('invoice.save-edit')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input id="product_id" type="hidden" name="product_id" class="form-control">
                        <input id="invoice_id" type="hidden" name="invoice_id" class="form-control">
                        <div class="form-group">
                            <label for="">Price <span class="text-danger">*</span></label>
                            <input id="price" type="number" name="price" class="form-control" disabled>
                            <input id="unit_price" type="hidden" name="unit_price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Quantity <span class="text-danger">*</span></label>
                            <input id="quantity" type="number" name="quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Total Price <span class="text-danger">*</span></label>
                            <input id="total_price" type="number" name="total_price" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="custom-select form-control">
                                    <option value="1">Chờ xử lý</option>
                                    <option value="2">Đã gửi hàng</option>
                                    <option value="0">Hủy</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('customjs')
    <script>
        $(document).ready(function () {
            $('.btn-remove').on('click', function () {
                var url = $(this).attr('linkUrl');
                Swal({
                    title: 'Bạn chắc chăn muốn xóa?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = url;
                        Swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });

        $(document).ready(function() {

            // You'll probably wan't to make .btn-default more specific
            $('.btn-modal').on( 'click', function() {

                var product_id = $(this).attr('data-product-id');
                var invoice_id = $(this).attr('data-invoice-id');
                var product_name = $(this).attr('data-product-name');
                var product_image = $(this).attr('data-product-image');
                var quantity = $(this).attr('data-quantity');
                var unit_price = $(this).attr('data-price');
                var status = $(this).attr('data-status');

                // $(".info-product").append("<img src='"+product_image+"' alt='' width='100'>\n" + "<a href='javascript:;'>"+product_name+"</a>");

                $('#modal-edit input#product_id').val(product_id);
                $('#modal-edit input#invoice_id').val(invoice_id);
                $('#modal-edit img#product_image').attr("src",product_image);
                $('#modal-edit a#product_name').text(product_name);
                $('#modal-edit input#quantity').val(quantity);
                $('#modal-edit input#price').val(unit_price);
                $('#modal-edit input#unit_price').val(unit_price);
                $('#modal-edit input#total_price').val(unit_price*quantity);
                $('#modal-edit select#status').val(status);
            });
        });
    </script>
@endsection