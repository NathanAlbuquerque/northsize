<section class="gadget-searchbar">
    <form action="" method="post">
        @csrf
        <div class="gadget-searchbar-box">
            <button type="submit" class="gadget-searchbar-button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="text" name="search" id="search" class="gadget-searchbar-input" placeholder="Buscar" maxlength="50" required>
        </div>
    </form>
</section>