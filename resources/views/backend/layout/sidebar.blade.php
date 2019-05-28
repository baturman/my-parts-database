<!-- Sidebar -->
<div class="sidebar-rb" id="sidebar-wrapper">
    <div class="sidebar-heading text-light bg-dark ">{{ config('app.name', 'Laravel') }}</div>
    <div class="list-group list-group-flush list-group-item-dark">
        <a href="{{ route('backend.dashboard') }}" class="list-group-item list-group-item-action @isset($menu_dashboard_active) active @endisset">Dashboard</a>
        <a href="{{ route('backend.categories') }}" class="list-group-item list-group-item-action @isset($menu_categories_active) active @endisset">Categories</a>
        <a href="{{ route('backend.parts') }}" class="list-group-item list-group-item-action @isset($menu_parts_active) active @endisset">Parts</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->