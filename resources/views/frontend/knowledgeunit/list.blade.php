@foreach ($knowledgeunits as $knowledgeunit)
	@if ($knowledgeunit->unit_id == $unit->id)
		@include('frontend.knowledgeunit.item')
	@endif
@endforeach
