core.debug = true;

core.addVar('x', 20);
core.addVar('y', 10);
core.addVar('z', core.getVar('x') + core.getVar('y'));

console.log(core.getVar('z'));

core.addMethod('add', function () {
    this.core.x += 100;
});
