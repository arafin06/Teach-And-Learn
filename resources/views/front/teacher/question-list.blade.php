@extends('front.master')


@section('body')


    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Question List</h1>
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
                            <th style="width: 350px">Question</th>
                            <th>Teacher Requirement</th>
                            <th>Start Bid Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php  $i=1;   ?>
                        @foreach($questions as $question)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$question->question_details}}</td>

                                <td>{{$question->teacher_requirement}}</td>
                                <td>{{$question->credit}}</td>
                                <td>
                                    <form action="{{route('start-bid')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="bidder_id" value="{{Session::get('clintId')}}">
                                        <input type="hidden" name="question_id" value="{{$question->id}}">
                                        <input type="number" name="bid_amount" min="{{$question->credit}}" required="" placeholder="{{$question->credit}}">
                                        <input type="submit" name="btn" value="Submit">
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