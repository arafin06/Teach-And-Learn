@extends('admin.master')



@section('body')

    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Credit confirmation form</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <h1>{{Session::get('massage')}}</h1>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Client ID</th>
                            <th>Bkash Number</th>
                            <th>Transition ID</th>
                            <th>Cash Amount</th>
                            <th>Credit Amount</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <?php  $i=1;   ?>

                        @foreach($buyCredits as $buyCredit)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$buyCredit->clint_id}}</td>
                                <td>{{$buyCredit->bkash_number}}</td>
                                <td>{{$buyCredit->tr_id}}</td>
                                <td>{{$buyCredit->cash}}</td>
                                <td>{{$buyCredit->credit}}</td>
                                <td style="width: 100px;">
                                    <form class="form-horizontal" action="{{route('add-credit')}}" method="post">
                                        @csrf


                                        <div class="form-group">
                                            <div >
                                                <input type="hidden" name="clint_id" value="{{$buyCredit->clint_id}}">
                                                <input type="hidden" name="credit" value="{{$buyCredit->credit}}">
                                                <input type="hidden" name="bid" value="{{$buyCredit->id}}">
                                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Confirm"/>
                                            </div>
                                        </div>
                                    </form>
                                </td>




                            </tr>

                            </tbody>
                            <?php $i++; ?>
                        @endforeach
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>



    @endsection