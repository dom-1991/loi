@props(['disabled' => false])

<input id="image" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
<img src="" alt="" class="imagepreview w-100 mt-2">
@push('scripts')
    <script>
        $('#image').change(function () {
            readURL(this)
        })
        function readURL(input) {
            var url = input.value;
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.imagepreview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
