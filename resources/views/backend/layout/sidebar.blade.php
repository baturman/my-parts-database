<!-- Sidebar -->
<div class="bg-light" id="sidebar-wrapper">
    <div class="sidebar-heading text-light bg-dark border-0">{{ config('app.name', 'Laravel') }}</div>
    <div class="list-group list-group-flush list-group-item-dark">
        <a href="#" class="list-group-item list-group-item-action bg-light ">Dashboard</a>
        <a href="{{ route('backend.categories') }}" class="list-group-item list-group-item-action bg-light">Categories</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Parts</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->