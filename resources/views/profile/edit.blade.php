<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="POST" action="{{ route('logout') }}" class="text-center">
                @csrf
                <button class="btn btn-primary"> {{ __('Đăng xuất') }}</button>
            </form>
        </div>
    </div>
</x-app-layout>
