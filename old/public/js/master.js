

//   $('.nav li a').click(function(e) {
//
//     $('.nav li').removeClass('active');
//
//     var $parent = $(this).parent();
//     if (!$parent.hasClass('active')) {
//         $parent.addClass('active');
//     }
//     e.preventDefault();
// });

// Raphael.chord('div1', 'A maj', 1).element.setSize(300, 300);
// Raphael.chord('div2', 'A maj', 3).element.setSize(300, 300);
// Raphael.chord('div3', 'A maj', 7).element.setSize(300, 300);
// Raphael.chord('div4', 'A maj', 5).element.setSize(300, 300);
// Raphael.chord('div5', 'A maj', 2).element.setSize(300, 300);

// Raphael.chord('div1', [-1,  3,  2,  0,  1,  0], 'C maj');

$(function() {
    //prepare to render the chords
    //A Chords
    Raphael.chord('AMajor1', 'A maj', 1).element.setSize(300, 300);
    Raphael.chord('AMajor2', 'A maj', 3).element.setSize(300, 300);
    Raphael.chord('AMajor3', 'A maj', 7).element.setSize(300, 300);
    Raphael.chord('AMajor4', 'A maj', 5).element.setSize(300, 300);
    Raphael.chord('AMajor5', 'A maj', 2).element.setSize(300, 300);

    Raphael.chord('AMinor1', 'A min', 1).element.setSize(300, 300);
    Raphael.chord('AMinor2', 'A min', 3).element.setSize(300, 300);
    Raphael.chord('AMinor3', 'A min', 7).element.setSize(300, 300);
    Raphael.chord('AMinor4', 'A min', 5).element.setSize(300, 300);
    Raphael.chord('AMinor5', 'A min', 2).element.setSize(300, 300);

    Raphael.chord('AMinor71', 'A min7', 1).element.setSize(300, 300);
    Raphael.chord('AMinor72', 'A min7', 3).element.setSize(300, 300);
    Raphael.chord('AMinor73', 'A min7', 7).element.setSize(300, 300);
    Raphael.chord('AMinor74', 'A min7', 5).element.setSize(300, 300);
    Raphael.chord('AMinor75', 'A min7', 2).element.setSize(300, 300);

    Raphael.chord('AMajor71', 'A maj7', 1).element.setSize(300, 300);
    Raphael.chord('AMajor72', 'A maj7', 3).element.setSize(300, 300);
    Raphael.chord('AMajor73', 'A maj7', 7).element.setSize(300, 300);
    Raphael.chord('AMajor74', 'A maj7', 5).element.setSize(300, 300);
    Raphael.chord('AMajor75', 'A maj7', 2).element.setSize(300, 300);

    //B Chords
    Raphael.chord('BMajor1', 'B maj', 1).element.setSize(300, 300);
    Raphael.chord('BMajor2', 'B maj', 3).element.setSize(300, 300);
    Raphael.chord('BMajor3', 'B maj', 7).element.setSize(300, 300);
    Raphael.chord('BMajor4', 'B maj', 5).element.setSize(300, 300);
    Raphael.chord('BMajor5', 'B maj', 2).element.setSize(300, 300);

    Raphael.chord('BMinor1', 'B min', 1).element.setSize(300, 300);
    Raphael.chord('BMinor2', 'B min', 3).element.setSize(300, 300);
    Raphael.chord('BMinor3', 'B min', 7).element.setSize(300, 300);
    Raphael.chord('BMinor4', 'B min', 5).element.setSize(300, 300);
    Raphael.chord('BMinor5', 'B min', 2).element.setSize(300, 300);

    Raphael.chord('BMinor71', 'B min7', 1).element.setSize(300, 300);
    Raphael.chord('BMinor72', 'B min7', 3).element.setSize(300, 300);
    Raphael.chord('BMinor73', 'B min7', 7).element.setSize(300, 300);
    Raphael.chord('BMinor74', 'B min7', 5).element.setSize(300, 300);
    Raphael.chord('BMinor75', 'B min7', 2).element.setSize(300, 300);

    Raphael.chord('BMajor71', 'B maj7', 1).element.setSize(300, 300);
    Raphael.chord('BMajor72', 'B maj7', 3).element.setSize(300, 300);
    Raphael.chord('BMajor73', 'B maj7', 7).element.setSize(300, 300);
    Raphael.chord('BMajor74', 'B maj7', 5).element.setSize(300, 300);
    Raphael.chord('BMajor75', 'B maj7', 2).element.setSize(300, 300);

    //C Chords
    Raphael.chord('CMajor1', 'C maj', 1).element.setSize(300, 300);
    Raphael.chord('CMajor2', 'C maj', 2).element.setSize(300, 300);
    Raphael.chord('CMajor3', 'C maj', 3).element.setSize(300, 300);
    Raphael.chord('CMajor4', 'C maj', 4).element.setSize(300, 300);
    Raphael.chord('CMajor5', 'C maj', 7).element.setSize(300, 300);

    Raphael.chord('CMinor1', 'C min', 1).element.setSize(300, 300);
    Raphael.chord('CMinor2', 'C min', 3).element.setSize(300, 300);
    Raphael.chord('CMinor3', 'C min', 7).element.setSize(300, 300);
    Raphael.chord('CMinor4', 'C min', 5).element.setSize(300, 300);
    Raphael.chord('CMinor5', 'C min', 2).element.setSize(300, 300);

    Raphael.chord('CMinor71', 'C min7', 1).element.setSize(300, 300);
    Raphael.chord('CMinor72', 'C min7', 3).element.setSize(300, 300);
    Raphael.chord('CMinor73', 'C min7', 7).element.setSize(300, 300);
    Raphael.chord('CMinor74', 'C min7', 5).element.setSize(300, 300);
    Raphael.chord('CMinor75', 'C min7', 2).element.setSize(300, 300);

    Raphael.chord('CMajor71', 'C maj7', 1).element.setSize(300, 300);
    Raphael.chord('CMajor72', 'C maj7', 3).element.setSize(300, 300);
    Raphael.chord('CMajor73', 'C maj7', 7).element.setSize(300, 300);
    Raphael.chord('CMajor74', 'C maj7', 5).element.setSize(300, 300);
    Raphael.chord('CMajor75', 'C maj7', 2).element.setSize(300, 300);

    //D Chords
    Raphael.chord('DMajor1', 'D maj', 1).element.setSize(300, 300);
    Raphael.chord('DMajor2', 'D maj', 3).element.setSize(300, 300);
    Raphael.chord('DMajor3', 'D maj', 7).element.setSize(300, 300);
    Raphael.chord('DMajor4', 'D maj', 5).element.setSize(300, 300);
    Raphael.chord('DMajor5', 'D maj', 2).element.setSize(300, 300);

    Raphael.chord('DMinor1', 'D min', 1).element.setSize(300, 300);
    Raphael.chord('DMinor2', 'D min', 3).element.setSize(300, 300);
    Raphael.chord('DMinor3', 'D min', 7).element.setSize(300, 300);
    Raphael.chord('DMinor4', 'D min', 5).element.setSize(300, 300);
    Raphael.chord('DMinor5', 'D min', 2).element.setSize(300, 300);

    Raphael.chord('DMinor71', 'D min7', 1).element.setSize(300, 300);
    Raphael.chord('DMinor72', 'D min7', 3).element.setSize(300, 300);
    Raphael.chord('DMinor73', 'D min7', 7).element.setSize(300, 300);
    Raphael.chord('DMinor74', 'D min7', 5).element.setSize(300, 300);
    Raphael.chord('DMinor75', 'D min7', 2).element.setSize(300, 300);

    Raphael.chord('DMajor71', 'D maj7', 1).element.setSize(300, 300);
    Raphael.chord('DMajor72', 'D maj7', 3).element.setSize(300, 300);
    Raphael.chord('DMajor73', 'D maj7', 7).element.setSize(300, 300);
    Raphael.chord('DMajor74', 'D maj7', 5).element.setSize(300, 300);
    Raphael.chord('DMajor75', 'D maj7', 2).element.setSize(300, 300);

    //E Chords
    Raphael.chord('EMajor1', 'E maj', 1).element.setSize(300, 300);
    Raphael.chord('EMajor2', 'E maj', 3).element.setSize(300, 300);
    Raphael.chord('EMajor3', 'E maj', 7).element.setSize(300, 300);
    Raphael.chord('EMajor4', 'E maj', 5).element.setSize(300, 300);
    Raphael.chord('EMajor5', 'E maj', 2).element.setSize(300, 300);

    Raphael.chord('EMinor1', 'E min', 1).element.setSize(300, 300);
    Raphael.chord('EMinor2', 'E min', 3).element.setSize(300, 300);
    Raphael.chord('EMinor3', 'E min', 7).element.setSize(300, 300);
    Raphael.chord('EMinor4', 'E min', 5).element.setSize(300, 300);
    Raphael.chord('EMinor5', 'E min', 2).element.setSize(300, 300);

    Raphael.chord('EMinor71', 'E min7', 1).element.setSize(300, 300);
    Raphael.chord('EMinor72', 'E min7', 3).element.setSize(300, 300);
    Raphael.chord('EMinor73', 'E min7', 7).element.setSize(300, 300);
    Raphael.chord('EMinor74', 'E min7', 5).element.setSize(300, 300);
    Raphael.chord('EMinor75', 'E min7', 2).element.setSize(300, 300);

    Raphael.chord('EMajor71', 'E maj7', 1).element.setSize(300, 300);
    Raphael.chord('EMajor72', 'E maj7', 3).element.setSize(300, 300);
    Raphael.chord('EMajor73', 'E maj7', 7).element.setSize(300, 300);
    Raphael.chord('EMajor74', 'E maj7', 5).element.setSize(300, 300);
    Raphael.chord('EMajor75', 'E maj7', 2).element.setSize(300, 300);

    //F Chords
    Raphael.chord('FMajor1', 'F maj', 1).element.setSize(300, 300);
    Raphael.chord('FMajor2', 'F maj', 3).element.setSize(300, 300);
    Raphael.chord('FMajor3', 'F maj', 7).element.setSize(300, 300);
    Raphael.chord('FMajor4', 'F maj', 5).element.setSize(300, 300);
    Raphael.chord('FMajor5', 'F maj', 2).element.setSize(300, 300);

    Raphael.chord('FMinor1', 'F min', 1).element.setSize(300, 300);
    Raphael.chord('FMinor2', 'F min', 3).element.setSize(300, 300);
    Raphael.chord('FMinor3', 'F min', 7).element.setSize(300, 300);
    Raphael.chord('FMinor4', 'F min', 5).element.setSize(300, 300);
    Raphael.chord('FMinor5', 'F min', 2).element.setSize(300, 300);

    Raphael.chord('FMinor71', 'F min7', 1).element.setSize(300, 300);
    Raphael.chord('FMinor72', 'F min7', 3).element.setSize(300, 300);
    Raphael.chord('FMinor73', 'F min7', 7).element.setSize(300, 300);
    Raphael.chord('FMinor74', 'F min7', 5).element.setSize(300, 300);
    Raphael.chord('FMinor75', 'F min7', 2).element.setSize(300, 300);

    Raphael.chord('FMajor71', 'F maj7', 1).element.setSize(300, 300);
    Raphael.chord('FMajor72', 'F maj7', 3).element.setSize(300, 300);
    Raphael.chord('FMajor73', 'F maj7', 7).element.setSize(300, 300);
    Raphael.chord('FMajor74', 'F maj7', 5).element.setSize(300, 300);
    Raphael.chord('FMajor75', 'F maj7', 2).element.setSize(300, 300);


    //G Chords
    Raphael.chord('GMajor1', 'G maj', 1).element.setSize(300, 300);
    Raphael.chord('GMajor2', 'G maj', 3).element.setSize(300, 300);
    Raphael.chord('GMajor3', 'G maj', 7).element.setSize(300, 300);
    Raphael.chord('GMajor4', 'G maj', 5).element.setSize(300, 300);
    Raphael.chord('GMajor5', 'G maj', 2).element.setSize(300, 300);

    Raphael.chord('GMinor1', 'G min', 1).element.setSize(300, 300);
    Raphael.chord('GMinor2', 'G min', 3).element.setSize(300, 300);
    Raphael.chord('GMinor3', 'G min', 7).element.setSize(300, 300);
    Raphael.chord('GMinor4', 'G min', 5).element.setSize(300, 300);
    Raphael.chord('GMinor5', 'G min', 2).element.setSize(300, 300);

    Raphael.chord('GMinor71', 'G min7', 1).element.setSize(300, 300);
    Raphael.chord('GMinor72', 'G min7', 3).element.setSize(300, 300);
    Raphael.chord('GMinor73', 'G min7', 7).element.setSize(300, 300);
    Raphael.chord('GMinor74', 'G min7', 5).element.setSize(300, 300);
    Raphael.chord('GMinor75', 'G min7', 2).element.setSize(300, 300);

    Raphael.chord('GMajor71', 'G maj7', 1).element.setSize(300, 300);
    Raphael.chord('GMajor72', 'G maj7', 3).element.setSize(300, 300);
    Raphael.chord('GMajor73', 'G maj7', 7).element.setSize(300, 300);
    Raphael.chord('GMajor74', 'G maj7', 5).element.setSize(300, 300);
    Raphael.chord('GMajor75', 'G maj7', 2).element.setSize(300, 300);

    $(".owl-carousel").owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:2,
              nav:false
          },
          1000:{
              items:2,
              nav:true,
              loop:false
          }
      }
    })

});
