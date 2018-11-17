<!-- HTML template layout for projects -->
<div id="locate-anything-template-wrapper">
<div id="bloc1">
[filters]
</div>
<div id="bloc2">
[map]
</div>
<div id="bloc3">
[navlist]   
</div>
</div>

<!-- CSS -->
<style>
#bloc1 {
    width:25%;
    float: right;
    background:#fff;   
    font-family: Verdana;
    font-style: 16px;
    padding:0;
    height: inherit;
    padding-left: 25px;
}

#bloc2 {
    width:75%;
    float: right;
    clear: none;
}

/** MAP CONTAINER */
.leaflet-container {    
    height: 1000px !important;
    float: left;
    width: 100%;
}

/** FILTERS */

/* checkboxes */
.LA_filters {
    
}
.LA_filters ul {
    margin: 0;
    padding: 0;
}

#bloc1  {
    height: calc(100% - 82px);
}

.LA_filters_checkbox {

}
.filter_term_name {
    padding-left: 5px;
}

/* Main filter wrapper*/
.category-filters-container {

}

/* filter container */
.category-filters-container li {
    padding-bottom: 1em;
}

/* filter title*/
.category-filters-container li b {
    width: 100% !important;
    float: left;
    margin-bottom: 5px;
    font-family: sans-serif;
    font-size: 14px;
}


/** NAV LIST */

/* outer wrapper*/
.map-nav-wrapper {
    height: inherit;
    overflow: auto;
    width: 100%;
}
.navlist-thumbnail {
    width: 30%;
}
.navlist-stripp-content {
    width: 70%;
    line-height: 1;
    padding-left: 10px;
    font-size: 16px;
}
.navlist-link {
    display: block;
}


/* list item*/
.map-nav-item {
    background: #ffffff none repeat scroll 0 0;
    border: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #eaeaea !important;
    color: #111111;
    cursor: pointer;
    float: left;
    font-size: 15px !important;   
    padding:  10px;
    text-decoration: none;
    float: left;
    margin: 0;
    padding-left: 0px
}
.map-nav-item:last-child {
    margin-bottom: 30px;
}
/* list item active*/
.map-nav-item:hover,.map-nav-item.focus {
    color:inherit !important;
    background-color: #f4f9fc;
}

.map-nav-item:last-child {
    border-bottom:0 !important;
}

/* list item styles */
.navlist-title {
    margin-bottom: 5px;
}
.navlist-content {
    display: flex;
}

/* Mask for list img */
.map-nav-item-wrapper div#mask {
    width: 100% !important;
    height: 100% !important;
    max-height: 100% !important;
}

.map-nav-item-wrapper div#mask img{
    width: 100%
}

.map-nav-pagination {
    margin-left: 10px
}

.locate-anything-page-nav {
    font-family: Verdana;
    font-size: 12px !important;
    float: left;
    color: #2d5be3;
    margin-right: 5px;
    width:auto;
}

/** TOKENIZE  */
.TokensContainer li { min-width: 0;
    width: auto;
    height: auto !important;
}

div.Tokenize {
    width: 90%;
    max-width:250px;
}

#locate-anything-template-wrapper {
    overflow: hidden;
    width: 100%;  
}

/*tooltip*/
.tooltip-wrap {
    display: flex;
}
.tooltip-content {
   padding-left: 10px;
}
.leaflet-container a.tooltip-link {
    text-align: center;
    display: block;
    border: 1px solid;
    padding: 5px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #0078A8;
    color: white;
    text-transform: uppercase;
}

/*nice-tooltips*/
.nice-tooltips .tooltip-wrap {
    flex-direction: column;
}
.nice-tooltips .tooltip-content {
   padding: 10px;
}
.leaflet-container .nice-tooltips a.tooltip-link {
   margin: 10px;
}

/*rangeslider*/
.rangeslider {
    max-width: 212px;
    margin-left: 10px;
}

/*pretty checkbox*/
.LA_filters_checkbox.pretty {
    display: flex;
    line-height: 1.3;
}
.LA_filters_checkbox.pretty .state label:after,
.LA_filters_checkbox.pretty .state label:before {
    top: calc((41% - (100% - 1em)) - 8%);
}
.filter-select select {
    max-width: 250px;
}

</style>