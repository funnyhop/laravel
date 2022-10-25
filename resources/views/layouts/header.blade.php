<ul class="nav" style="background-color:#2F4F4F">
    <li class="nav-item">
        <a
            class="nav-link {{ request()->is('/') ? 'active' : '' }}"
            href="/">Home
        </a>
    </li>
    <li class="nav-item">
        <a
            class="nav-link {{ request()->is('products/index') ? 'active' : ''}}"
            href="products/index">Product
        </a>
      </li>
    <li class="nav-item">
        <a
            class="nav-link {{ request()->is('about') ? 'active' : '' }}" 
            href="about">About
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>
<div style="background-color:#52d7a9; height:100px;">
    <h2>Header</h2>
</div>