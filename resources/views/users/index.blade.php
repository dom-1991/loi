<x-app-layout>
    <div class="container mt-3 homepage">
        <div class="row">
            <div class="col-12 mb-3">
                <h4>Nhân viên</h4>
            </div>
            @foreach($users as $user)
                <div class="col-12 mb-3 col-md-6">
                    <div class="rounded shadow {{ \App\Enums\UserRole::getColor()[$user->role] }} p-3">
                        <p>Tên: {{ $user->name }}</p>
                        <p>Vị trí: {{ \App\Enums\UserRole::getLabel()[$user->role] }}</p>
                        <p>Chi trả: <b>{{ number_format($user->salary) }}</b> đồng/tháng</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

