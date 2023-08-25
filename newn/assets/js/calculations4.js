$(".calc").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 4 расчета*/
        R = $('input[name="R"]').val(),
        Nob = $('input[name="Nob"]').val(),
        W = $('input[name="W"]').val(),
        Diamdol = $('input[name="Diamdol"]').val(),
     /* Формулы для расчета 4 задачи*/
     qw1 = (3.28*R) / (60*Nob);
     qw2 = (2.7*W) / (39.37*Diamdol);
    dex = (Math.log(qw1) / Math.log(qw2)).toFixed(2);
/*Ввод выходных значений для 4 расчета*/
      dex_text = $('input[name="dex"]'),
       /*Ввод выходных значений для 4 расчета */
      dex_text.val(dex);
      $.ajax({
        url: '../../calc_db4.php',
        type: 'POST',
        data: {
            /*Отправка всех значений  4 расчета */
            R:R,
            Nob:Nob,
            W:W,
            Diamdol:Diamdol,
            dex:dex,
                    }
    });
});
            $(".demo").click(function () {
  let
            /*Автозаполнение демо значений для 2 расчета */
  R_text = $('input[name="R"]'),
  Nob_text = $('input[name="Nob"]'),
  W_text = $('input[name="W"]');
  Diamdol_text = $('input[name="Diamdol"]');
  D_text = $('input[name="D"]');
  R_text.val(9.1);
  Nob_text.val(120);
  W_text.val(155);
  Diamdol_text.val(216);
  });