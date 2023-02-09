<x-app-layout>
    <div class="container mt-3 homepage">
        <form action="" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <h4>Chi tiêu</h4>
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
                        <x-input-label for="type" value="Loại" required="true" />
                        <x-select-input id="type" class="block mt-1 w-full" :options="$types" name="type" :select="old('type')" />
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 mt-3 col-md-6">
                    <div class="form-group">
                        <x-input-label for="employ_id" value="Nhân viên" />
                        <x-select-input id="employ_id" class="block mt-1 w-full" :options="$employs" name="employ_id" :select="old('employ_id')" />
                        <x-input-error :messages="$errors->get('employ_id')" class="mt-2" />
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
                        <x-input-label for="payment_type" value="Thanh toán" required="true" />
                        <x-select-input id="payment_type" class="block mt-1 w-full" :options="$paymentTypes" name="payment_type" :select="old('payment_type')" />
                        <x-input-error :messages="$errors->get('payment_type')" class="mt-2" />
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

