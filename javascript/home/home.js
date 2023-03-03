document.getElementById('global-search-form').globalCompanySelect.onchange = function() {
    var newaction = this.value;
    document.getElementById('global-search-form').action = newaction;
};