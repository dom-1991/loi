<x-app-layout>
    <div class="container mt-3 homepage">
        <form action="">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <x-input-label for="type" value="Loại" />
                        <x-select-input id="type" class="block mt-1 w-full" name="type" :select="old('type')" />
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
