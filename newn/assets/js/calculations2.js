$(".calc").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 2 расчета*/
        pbr = $('input[name = "pbr"]').val(),
        Q = $('input[name = "Q"]').val(),
        rN1 = $('input[name = "rN1"]').val(),
        rN2 = $('input[name = "rN2"]').val(),
        rN3 = $('input[name = "rN3"]').val(),
        Dsk = $('input[name = "Dsk"]').val(),
        nD = $('input[name = "nD"]').val(),
        yDav = $('input[name = "yDav"]').val(),

        /* Формулы для расчета 2 задачи */
    Dskv = (Dsk/1000);
    nDn = (nD/1000);
    Vkol =((Math.pow(10,-3)*((1.274*Q)/Math.pow(Dskv,2)-Math.pow(nDn,2)))).toFixed(2);
    P_dav = (((Math.pow(Q,2)*1438))/ (2*(Math.pow(212.5,2)))).toFixed(1);
    Nmos = (yDav*Q).toFixed(0);
    Ndel = (P_dav*Q).toFixed(0);
    x = (1.27);
    y = (967.27).toFixed(2);
    Nmk = ((x * Ndel) / (y)).toFixed(2);
    procpot = ((P_dav / yDav) * 100).toFixed(0);
    A = (Math.sqrt(Math.pow(Q,2)*pbr) / 2 * P_dav).toFixed(1)
    Vnas = (Math.pow(10,3)*(Q / 212.5)).toFixed(0);
    J = ((pbr * Vnas * Q) / 1000).toFixed(0);
    Jmm = ((x * J) / Math.pow(Dsk,2)).toFixed(3);
/*Ввод выходных значений для 2 расчета */
      Vkol_text = $('input[name="Vkol"]'),
      P_dav_text = $('input[name="P_dav"]'),
      Nmos_text = $('input[name="Nmos"]'),
      Ndel_text = $('input[name="Ndel"]'),
      Nmk_text = $('input[name="Nmk"]'),
      procpot_text = $('input[name="procpot"]'),
      Vnas_text = $('input[name="Vnas"]'),
      J_text = $('input[name="J"]'),
      Jmm_text = $('input[name="Jmm"]'),
      /*Ввод выходных значений для 2 расчета*/
      Vkol_text.val(Vkol);
      P_dav_text.val(P_dav);
      Nmos_text.val(Nmos);
      Ndel_text.val(Ndel);
      Nmk_text.val(Nmk);
      procpot_text.val(procpot);
      Vnas_text.val(Vnas);
      J_text.val(J);
      Jmm_text.val(Jmm);
      $.ajax({
        url: '../../calc_db2.php',
        type: 'POST',
        data: {
            /*Отправка всех значений  2 расчета */
            pbr:pbr,
            Q:Q,
            rN1:rN1,
            rN2:rN2,
            rN3:rN3,
            Dsk:Dsk,
            nD:nD,
            yDav:yDav,
            Vkol:Vkol,
            P_dav:P_dav,
            Nmos:Nmos,
            Ndel:Ndel,
            Nmk:Nmk,
            procpot:procpot,
            Vnas:Vnas,
            J:J,
            Jmm:Jmm,
                    }
    });
});
            $(".demo").click(function () {
  let
            /*Автозаполнение демо значений для 2 расчета */
  pbr_text = $('input[name="pbr"]'),
  Q_text = $('input[name="Q"]'),
  rN1_text = $('input[name="rN1"]');
  rN2_text = $('input[name="rN2"]');
  rN3_text = $('input[name="rN3"]');
  Dsk_text = $('input[name="Dsk"]');
  nD_text = $('input[name="nD"]');
  yDav_text = $('input[name="yDav"]');
  pbr_text.val(1438);
  Q_text.val(32.7);
  rN1_text.val(9.5);
  rN2_text.val(9.5);
  rN3_text.val(9.5);
  Dsk_text.val(311);
  nD_text.val(127);
  yDav_text.val(20.0);
  });