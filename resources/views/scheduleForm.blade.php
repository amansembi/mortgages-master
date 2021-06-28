
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<form id="scheduleForm" class="schedule_form">
		{!! csrf_field() !!}
	<div class="schedule-form mx-auto">
		<div class="row m-0">
			<div class="col-md-3 p-0">
				<div class="input-icon d-flex">
					<div class="icon">
						<span><img src="{{asset('resources/img/user.png')}}" alt="Icon"></span>
					</div>
					<div class="input">
						<input type="text" class="scheduleName" name="scheduleName" placeholder="Name" value="{{old('scheduleName')}}" >
					</div>
				</div>
			</div><!-- col -->

			<div class="col-md-3 p-0">
				<div class="input-icon d-flex">
					<div class="icon">
						<span><img src="{{asset('resources/img/Time.png')}}" alt="Icon"></span>
					</div>
					<div class="input timeinput" id="timeinput">
						<input type="text" class="scheduleTime" name="scheduleTime" placeholder="Time" value="{{old('scheduleTime')}}" >
					</div>
				</div>
			</div><!-- col -->

			<div class="col-md-3 p-0">
				<div class="input-icon d-flex">
					<div class="icon">
						<span><img src="{{asset('resources/img/Calendar.png')}}" alt="Icon"></span>
					</div>
					<div class="input dateinput" id="dateinput">
						<input type="text" class="scheduleDate" name="scheduleDate" value="{{old('scheduleDate')}}" placeholder="Date">
					</div>
				</div>
			</div><!-- col -->

			<div class="col-md-3 p-0">
				<div class="submit h-100">
					<button type="button" class="common-btn schedule_form_submit">submit</button>
				</div>
			</div><!-- col -->			
		</div><!-- row -->		
	</div><!-- schedule-form -->
</form>
<script>
	$('.dateinput').calendar({
		type: 'date'
	});
	$('.timeinput').calendar({
		type: 'time'
	});
	
	
</script>