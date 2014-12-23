@extends('layouts.default')
@section('title')
	<title>Technowell Trackimon | Vehicle Tracking</title>
@stop
@section('content')
	<div id="mapcanvas"></div>
		<div class="panel-group filter-btn" id="accordion">
		  	<div class="panel panel-default">
		    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
		      <h4 class="panel-title">
		        <a class="accordion-toggle">
		        	<i class="fa fa-bars fa-lg filter-menu"></i>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in filter">
		      <div class="panel-body">
		        <form role="form">
		          <div class="form-group">
		            <input type="text" class="form-control" id="user-id" placeholder="User Id">
		          </div>
		          <div class="form-group">
		          	<!-- <label for="from-date">From Date</label> -->
		            <div class='input-group date' id='datetimepicker1'>
	                    <input type='text' class="form-control" name="from-date" id="from-date"placeholder="From Date" data-date-format="DD/MM/YYYY hh:mm A"/>
	                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                </div>
		          </div>
		          <div class="form-group">
		          	<!-- <label for="to-date">To Date</label> -->
		            <div class='input-group date' id='datetimepicker2'>
	                    <input type='text' class="form-control" name="to-date" id="to-date" placeholder="To Date" data-date-format="DD/MM/YYYY hh:mm A"/>
	                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                </div>
		          </div>
		          <div class="pull-right">
		          	<button type="button" class="btn btn-default" onclick="clearmap()">Clear</button>
		          	<button type="button" class="btn btn-default" onclick="setFilterParams()">Filter</button>
		          </div>

		        </form>
		      </div>
		    </div>
	  	</div>


    </div>
@stop