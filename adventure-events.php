<!doctype html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title>Centered Masonry &middot; Isotope </title>
  
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
  <link rel="stylesheet" href="style.css" />
  
  <!-- scripts at bottom of page -->
  
  <!-- <script src="http://desandro.com/mint/?script"></script> -->

</head>
<body class="custom-layout-modes ">

  <div id="top-banner">
    <p><a href="http://isotope.metafizzy.co/">Isotope v2 is here. Update to the latest.</a></p>
  </div>

  <nav id="site-nav">
    <h1><a href="../index.html">Isotope</a></h1>

    <h2>Docs</h2>
    
    <ul>
      
        
          <li><a href="../docs/introduction.html">Introduction</a>
        
      
        
          <li><a href="../docs/options.html">Options</a>
        
      
        
          <li><a href="../docs/methods.html">Methods</a>
        
      
        
          <li><a href="../docs/layout-modes.html">Layout modes</a>
        
      
        
          <li><a href="../docs/filtering.html">Filtering</a>
        
      
        
          <li><a href="../docs/sorting.html">Sorting</a>
        
      
        
          <li><a href="../docs/animating.html">Animating</a>
        
      
        
          <li><a href="../docs/adding-items.html">Adding items</a>
        
      
        
          <li><a href="../docs/extending-isotope.html">Extending Isotope</a>
        
      
        
          <li><a href="../docs/hash-history-jquery-bbq.html">Hash history with jQuery BBQ</a>
        
      
        
          <li><a href="../docs/help.html">Help</a>
        
      
        
          <li><a href="../docs/license.html">License</a>
        
      
    </ul>
    
    <h2>Demos</h2>
    
    <ul>
      
        
          <li><a href="../demos/basic.html">Basic</a>
        
      
        
          <li><a href="../demos/elements-complete.html">Elements Complete</a>
        
      
        
          <li><a href="../demos/elements-partial.html">Elements Partial</a>
        
      
        
          <li><a href="../demos/layout-modes.html">Layout modes</a>
        
      
        
          <li><a href="../demos/filtering.html">Filtering</a>
        
      
        
          <li><a href="../demos/sorting.html">Sorting</a>
        
      
        
          <li><a href="../demos/relayout.html">reLayout</a>
        
      
        
          <li><a href="../demos/adding-items.html">Adding items</a>
        
      
        
          <li><a href="../demos/infinite-scroll.html">Infinite Scroll</a>
        
      
        
          <li><a href="../demos/images.html">Images</a>
        
      
        
          <li><a href="../demos/combination-filters.html">Combination filters</a>
        
      
        
          <li><a href="../demos/hash-history.html">Hash history</a>
        
      
        
          <li><a href="../demos/fluid-responsive.html">Fluid / responsive</a>
        
      
        
          <li><a href="../demos/removing.html">Removing</a>
        
      
    </ul>
    
    <h2>Custom layout modes</h2>
    
    <ul>
      
        
          <li class="current"><a href="#content">Centered Masonry</a></li>
        
      
        
          <li><a href="../custom-layout-modes/category-rows.html">Category rows</a>
        
      
        
          <li><a href="../custom-layout-modes/masonry-corner-stamp.html">Masonry corner stamp</a>
        
      
        
          <li><a href="../custom-layout-modes/masonry-gutters.html">Masonry gutters</a>
        
      
        
          <li><a href="../custom-layout-modes/spine-align.html">Spine align</a>
        
      
        
          <li><a href="../custom-layout-modes/big-graph.html">BIG Graph</a>
        
      
        
          <li><a href="../custom-layout-modes/masonry-column-shift.html">Masonry Column Shift</a>
        
      
    </ul>
    
    <h2><a href="../tests/index.html">Tests</a></h2>
    
  </nav> <!-- #site-nav -->
  
  <section id="content">
    
      <h1>Centered Masonry</h1>
    

    <style>
  #container {
    margin: 0 auto 20px;
  }
</style>

<section id="copy">
  <p><a href="../docs/layout-modes.html#modified_layout_modes">Modified masonry layout mode</a> for centered container.</p>
</section>

<section id="options" class="clearfix">

  
      <h3>Filters</h3>

      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
        <li><a href="#filter" data-option-value=".metal">metal</a></li>
        <li><a href="#filter" data-option-value=".transition">transition</a></li>
        <li><a href="#filter" data-option-value=".post-transition">post-transition</a></li>
        <li><a href="#filter" data-option-value=".nonmetal">nonmetal</a></li>
        <li><a href="#filter" data-option-value=".inner-transition">inner-transition</a></li>
        <li><a href="#filter" data-option-value=".alkali, .alkaline-earth">alkali and alkaline-earth</a></li>
        <li><a href="#filter" data-option-value=":not(.transition)">not transition</a></li>
        <li><a href="#filter" data-option-value=".metal:not(.transition)">metal but not transition</a></li>
      </ul>


  
    <h3>Sort</h3>

    <ul id="sort-by" class="option-set clearfix" data-option-key="sortBy">
      <li><a href="#sortBy=original-order" data-option-value="original-order" class="selected" data>original-order</a></li>
      <li><a href="#sortBy=name" data-option-value="name">name</a></li>
      <li><a href="#sortBy=symbol" data-option-value="symbol">symbol</a></li>
      <li><a href="#sortBy=number" data-option-value="number">number</a></li>
      <li><a href="#sortBy=weight"  data-option-value="weight">weight</a></li>
      <li><a href="#sortBy=category" data-option-value="category">category</a></li>
      <li><a href="#sortBy=random" data-option-value="random">random</a></li>
    </ul>

    <h3>Sort direction</h3>

    <ul id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
      <li><a href="#sortAscending=true" data-option-value="true" class="selected">sort ascending</a></li>
      <li><a href="#sortAscending=false" data-option-value="false">sort descending</a></li>
    </ul>


  <h3>Etc</h3>

  <ul id="etc" class="clearfix">
    <li id="toggle-sizes"><a href="#toggle-sizes">Toggle variable sizes</a></li>
    <li id="insert"><a href="#insert">Insert new elements</a></li>
    <li id="append"><a href='#append'>Append new elements</a></li>
    <li id="shuffle"><a href='#shuffle'>Shuffle</a></li>
  </ul>

</section> <!-- #options -->

<div id="container" class="clickable clearfix">
  
    
        
    <div class="element transition metal   " data-symbol="Hg" data-category="transition">
      <p class="number">80</p>
      <h3 class="symbol">Hg</h3>
      <h2 class="name">Mercury</h2>
      <p class="weight">200.59</p>
    </div>
  
    
        
    <div class="element metalloid   " data-symbol="Te" data-category="metalloid">
      <p class="number">52</p>
      <h3 class="symbol">Te</h3>
      <h2 class="name">Tellurium</h2>
      <p class="weight">127.6</p>
    </div>
  
    
        
    <div class="element post-transition metal   " data-symbol="Bi" data-category="post-transition">
      <p class="number">83</p>
      <h3 class="symbol">Bi</h3>
      <h2 class="name">Bismuth</h2>
      <p class="weight">208.9804</p>
    </div>
  
    
        
    <div class="element transition metal   " data-symbol="Cd" data-category="transition">
      <p class="number">48</p>
      <h3 class="symbol">Cd</h3>
      <h2 class="name">Cadmium</h2>
      <p class="weight">112.411</p>
    </div>
  
    
        
    <div class="element alkaline-earth metal   " data-symbol="Ca" data-category="alkaline-earth">
      <p class="number">20</p>
      <h3 class="symbol">Ca</h3>
      <h2 class="name">Calcium</h2>
      <p class="weight">40.078</p>
    </div>
  
    
        
    <div class="element transition metal   " data-symbol="Re" data-category="transition">
      <p class="number">75</p>
      <h3 class="symbol">Re</h3>
      <h2 class="name">Rhenium</h2>
      <p class="weight">186.207</p>
    </div>
  
    
        
    <div class="element post-transition metal   " data-symbol="Tl" data-category="post-transition">
      <p class="number">81</p>
      <h3 class="symbol">Tl</h3>
      <h2 class="name">Thallium</h2>
      <p class="weight">204.3833</p>
    </div>
  
    
        
    <div class="element metalloid   " data-symbol="Sb" data-category="metalloid">
      <p class="number">51</p>
      <h3 class="symbol">Sb</h3>
      <h2 class="name">Antimony</h2>
      <p class="weight">121.76</p>
    </div>
  
    
        
    <div class="element transition metal   " data-symbol="Co" data-category="transition">
      <p class="number">27</p>
      <h3 class="symbol">Co</h3>
      <h2 class="name">Cobalt</h2>
      <p class="weight">58.933195</p>
    </div>
  
    
        
    <div class="element lanthanoid metal inner-transition   " data-symbol="Lu" data-category="lanthanoid">
      <p class="number">71</p>
      <h3 class="symbol">Lu</h3>
      <h2 class="name">Lutetium</h2>
      <p class="weight">174.9668</p>
    </div>
  
    
        
    <div class="element noble-gas nonmetal   " data-symbol="Ar" data-category="noble-gas">
      <p class="number">18</p>
      <h3 class="symbol">Ar</h3>
      <h2 class="name">Argon</h2>
      <p class="weight">39.948</p>
    </div>
  
    
        
    <div class="element alkali metal   " data-symbol="Rb" data-category="alkali">
      <p class="number">37</p>
      <h3 class="symbol">Rb</h3>
      <h2 class="name">Rubidium</h2>
      <p class="weight">85.4678</p>
    </div>
  
    
        
    <div class="element other nonmetal   " data-symbol="N" data-category="other">
      <p class="number">7</p>
      <h3 class="symbol">N</h3>
      <h2 class="name">Nitrogen</h2>
      <p class="weight">14.0067</p>
    </div>
  
    
        
    <div class="element actinoid metal inner-transition   " data-symbol="Np" data-category="actinoid">
      <p class="number">93</p>
      <h3 class="symbol">Np</h3>
      <h2 class="name">Neptunium</h2>
      <p class="weight">(237)</p>
    </div>
  
    
        
    <div class="element actinoid metal inner-transition   " data-symbol="Ac" data-category="actinoid">
      <p class="number">89</p>
      <h3 class="symbol">Ac</h3>
      <h2 class="name">Actinium</h2>
      <p class="weight">(227)</p>
    </div>
  
</div> <!-- #container -->


<script src="jquery-1.7.1.min.js"></script>
<script src="jquery.isotope.min.js"></script>
<script src="fake-element.js"></script>
<script>

  $.Isotope.prototype._getCenteredMasonryColumns = function() {
    this.width = this.element.width();
    
    var parentWidth = this.element.parent().width();
    
                  // i.e. options.masonry && options.masonry.columnWidth
    var colW = this.options.masonry && this.options.masonry.columnWidth ||
                  // or use the size of the first item
                  this.$filteredAtoms.outerWidth(true) ||
                  // if there's no items, use size of container
                  parentWidth;
    
    var cols = Math.floor( parentWidth / colW );
    cols = Math.max( cols, 1 );

    // i.e. this.masonry.cols = ....
    this.masonry.cols = cols;
    // i.e. this.masonry.columnWidth = ...
    this.masonry.columnWidth = colW;
  };
  
  $.Isotope.prototype._masonryReset = function() {
    // layout-specific props
    this.masonry = {};
    // FIXME shouldn't have to call this again
    this._getCenteredMasonryColumns();
    var i = this.masonry.cols;
    this.masonry.colYs = [];
    while (i--) {
      this.masonry.colYs.push( 0 );
    }
  };

  $.Isotope.prototype._masonryResizeChanged = function() {
    var prevColCount = this.masonry.cols;
    // get updated colCount
    this._getCenteredMasonryColumns();
    return ( this.masonry.cols !== prevColCount );
  };
  
  $.Isotope.prototype._masonryGetContainerSize = function() {
    var unusedCols = 0,
        i = this.masonry.cols;
    // count unused columns
    while ( --i ) {
      if ( this.masonry.colYs[i] !== 0 ) {
        break;
      }
      unusedCols++;
    }
    
    return {
          height : Math.max.apply( Math, this.masonry.colYs ),
          // fit container to columns that have been used;
          width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
        };
  };


  $(function(){
    
    var $container = $('#container');
    
    
      // add randomish size classes
      $container.find('.element').each(function(){
        var $this = $(this),
            number = parseInt( $this.find('.number').text(), 10 );
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $container.isotope({
      itemSelector : '.element',
      masonry : {
        columnWidth : 120
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        name : function ( $elem ) {
          return $elem.find('.name').text();
        }
      }
    });
      
    
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });


    
      $('#insert a').click(function(){
        var $newEls = $( fakeElement.getGroup() );
        $container.isotope( 'insert', $newEls );

        return false;
      });

      $('#append a').click(function(){
        var $newEls = $( fakeElement.getGroup() );
        $container.append( $newEls ).isotope( 'appended', $newEls );

        return false;
      });


    
      // change size of clicked element
      $container.delegate( '.element', 'click', function(){
        $(this).toggleClass('large');
        $container.isotope('reLayout');
      });

      // toggle variable sizes of all elements
      $('#toggle-sizes').find('a').click(function(){
        $container
          .toggleClass('variable-sizes')
          .isotope('reLayout');
        return false;
      });


    var $sortBy = $('#sort-by');
    $('#shuffle a').click(function(){
      $container.isotope('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });
    
  });
</script>
    
    <footer>
      Isotope by <a href="http://desandro.com">David DeSandro</a> / <a href="http://metafizzy.co">Metafizzy</a>
    </footer>
    
  </section> <!-- #content -->

  <!-- analytics -->
  <script>
    var _gaq=[['_setAccount','UA-592624-5'],['_trackPageview'],['_setDomainName', '.metafizzy.co']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>