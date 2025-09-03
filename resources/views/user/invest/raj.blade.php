
@if(isset($task) && count($task))
    @foreach ($task as $item)
        <img src="{{ asset('company_image/' . $item->company_image) }}" alt="Company Image" style="width: 20px;">
    @endforeach
@else
    <p>No images found.</p>
@endif