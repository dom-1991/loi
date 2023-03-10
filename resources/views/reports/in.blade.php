<x-app-layout>
    <div class="container mt-3 homepage">
        <form action="" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <h4>Thu nhập</h4>
                </div>
                <div class="col-12 mt-3 col-md-6">
                    <div class="form-group">
                        <x-input-label for="datepicker" value="Ngày" required="true" />
                        <x-datepicker id="datepicker" type="text" class="block mt-1 w-full" name="date" :value="old('date', $now)" />
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 mt-3 col-md-6">
                    <div class="form-group">
                        <x-input-label for="amount" value="Số tiền" required="true" />
                        <x-amount-input class="block mt-1 w-full" name="amount" :value="old('amount')" />
                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 mt-3 col-md-6">
                    <div class="form-group">
                        <x-input-label for="image" value="Hình ảnh" />
                        <x-image accept="image/*" type="file" class="block mt-1 w-full" name="image" :value="old('image')" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 mt-3 col-md-6">
                    <div class="form-group">
                        <x-input-label for="note" value="Ghi chú" />
                        <x-textarea rows="5" id="note" class="block mt-1 w-full" name="note" :value="old('note')" />
                        <x-input-error :messages="$errors->get('note')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 mt-3 col-md-6 mb-4">
                    <button class="btn btn-primary submit">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

