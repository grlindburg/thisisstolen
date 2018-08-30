<?php get_header(); 

?>

<div id="scratch">
    <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/E4110_10.png">
</div>

<div class="products">
    <div class="products-title">
        <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/Stolen_Stencil_B-revised.jpg">
        <h2>Spirits</h2>
    </div>
    <div class="filter-button-group button-group js-radio-button-group">
        <button data-sort-value="country, number" class="button active" data-filter="*">
            <img class="line" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world-2.png">
            <img class="solid" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world_0003_Layer-1.png">
        </button>
        <button data-sort-value="number, country" class="button" data-filter=".america">
            <img class="line" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world_0004_US_Outline.png">
            <img class="solid" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world_0000_USA-1.png">
        </button>
        <button data-sort-value="country, number" class="button" data-filter=".australia">
            <img class="line" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world_0006_AUS_Outline.png">
            <img class="solid" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world_0001_AUS-1.png">
        </button>
        <button data-sort-value="country, number" class="button" data-filter=".new-zealand">
            <img class="line" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/nzout.png">
            <img class="solid" src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/world_0002_NZ-1.png">
        </button>
    </div>

    <div class="bottle-rack">
        <div data-country="A" class="element-item america new-zealand australia">
            <p class="number">2</p>
            <a href="/stolen/stolen-smoked-rum/">            
                <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/smoked.png"/>
                <h5>Made in Trinidad & Tobago<br/>42% ALC/VOL</h5>
                <h3>Find Out More</h3>
            </a>    
        </div>
        <div data-country="B" class="element-item america">
            <p class="number">1</p>
            <a href="/stolen/whiskey/">                
                <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0004_whiskeybottlewhitelabelred900.png.png"/>
                <h5>Made in America<br/>46% ALC/VOL</h5>
                <h3>Find Out More</h3>
            </a>
        </div>
        <div data-country="C" class="element-item america">
            <p class="number">3</p>
            <a href="/stolen/stolen-overproof-rum/">
            <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0000_download-1.jpeg.png"/>                
                <h5>Made in Jamaica<br/>61.5% ALC/VOL</h5>
                <h3>Find Out More</h3>
            </a>
        </div>
        <div data-country="D" class="element-item australia new-zealand">
            <p class="number">4</p>
            <a href="/stolen/stolen-white-rum/">
                <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0002_download.png.png"/>
                <h5>Made in Trinidad & Tobago<br/>37.5% ALC/VOL</h5>
                <h3>Find Out More</h3>
            </a>
        </div>
        <div data-country="E" class="element-item australia new-zealand">
            <p class="number">5</p>
            <a href="/stolen/stolen-gold-rum">
                <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0001_download-3.jpeg.png"/>                
                <h5>Made in Trinidad & Tobago<br/>37.5% ALC/VOL</h5>
                <h3>Find Out More</h3>
            </a>
        </div>
        <div data-country="F" class="element-item new-zealand">
            <p class="number">6</p>
            <a href="/stolen/stolen-dark-rum">
                <img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/stolen_0006_download-2.jpeg.png"/>
                <h5>Made in Trinidad & Tobago<br/>37.5% ALC/VOL</h5>
                <h3>Find Out More</h3>
            </a>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
