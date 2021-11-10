<form class="example" action="../../search.php">
    <div class="clear-fix">
      <input type="text" class="search" required onKeyUp="fx(this.value)" id="qu" name="qu" placeholder="Search here..." name="search" autocomplete="off">
    <button type="button" class="textbox-clr" id="textbox-clr" onClick="lightbg_clr()"></button>
    <button class="btn" name="submit" type="submit">
        <svg class="search__icon">
            <use xlink:href="../../img/svg/sprite.svg#icon-magnifying-glass"></use>
        </svg>
    </button>
  </div>
    <div id="livesearch"></div>
  </form>
  
  <div id="search-layer"></div>