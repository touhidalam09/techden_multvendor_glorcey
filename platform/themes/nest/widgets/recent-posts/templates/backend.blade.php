<div class="mb-3">
    <label for="widget-name">{{ __('Name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
</div>
<div class="mb-3">
    <label for="number_display">{{ __('Number posts to display') }}</label>
    <input type="number" class="form-control" name="number_display" value="{{  $config['number_display'] }}">
</div>
