$(".calc").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 5c расчета*/
      pr5c = $('input[name= pr5c]').val(),
        plv5c = $('input[name= plv5c]').val(),
        pns5c = $('input[name= pns5c]').val(),
        dskv5c = $('input[name= dskv5c]').val(),
        dn5c = $('input[name= dn5c]').val(),
        L5c = $('input[name= L5c]').val(),
        dn25c = $('input[name= dn25c]').val(),
        Lybt5c = $('input[name= Lybt5c]').val(),
        sst5c = $('input[name= sst5c]').val(),
        Lvert5c = $('input[name= Lvert5c]').val(), 
     /* Формулы для расчета 5c задачи*/
vx5c = Math.pow(dn5c,2)/(Math.pow(dskv5c,2)-Math.pow(dn5c,2));
vvx = (vx5c*1)+(0.45*1);
v5c = (vvx*1.37).toFixed(3);

vm5c = (1.5*v5c).toFixed(3);

q300 = (plv5c*1) + (20*1);
q600 = (q300*1) + (plv5c*1);

n5c1 = (q600/q300);
n5c = ((n5c1*3.32)/7.2).toFixed(4);

k5c = (q300 /(Math.pow(511,n5c))).toFixed(3);

vm5c1 = 12*Math.pow(10,3)*vm5c;
y5c1 = dskv5c - dn5c; 
y5c = (vm5c1/(dskv5c - dn5c)).toFixed(0);

t5c = (k5c*(Math.pow(y5c,n5c))).toFixed(2)

pcn5c = (((vm5c*t5c)/y5c1)*(L5c/1000)).toFixed(2);
 

vybt1 = Math.pow(dn25c,2)/(Math.pow(dskv5c,2)-Math.pow(dn25c,2));
vybt = (((0.45*1)+vybt1*1)*1.37).toFixed(2);

vmy = (1.5*vybt).toFixed(2);

q5c = (0.000785*vmy*(Math.pow(dskv5c,2)-Math.pow(dn25c,2))).toFixed(2);

pcny1 = 30.3 * Math.pow(pr5c,0.8) * Math.pow(q5c,1.8)* Math.pow(pns5c,0.2)* Lybt5c; 
pcny2 = dskv5c - dn25c;
pcny3 = (dskv5c*1) + (dn25c*1)
pcny4 = (Math.pow(pcny2,3) * Math.pow(pcny3,1.8));
pcny = (pcny1/pcny4).toFixed(2);

pcny5 = ((pcn5c*1)+(pcny*1)).toFixed(2);

dp = (Math.pow(10,6)*pcny5/(9.8*Lvert5c)).toFixed(1);

L5cc = 1.660;
g = 9.81;

DP = (Math.pow(10,-6)*dp*L5cc*g).toFixed(6);
/*Ввод выходных значений для 5c расчета*/
       v5c_text = $('input[name="v5c"]'),
        vm5c_text = $('input[name="vm5c"]'),
        n5c_text = $('input[name="n5c"]'),
        k5c_text = $('input[name="k5c"]'),
        y5c_text = $('input[name="y5c"]'),
        t5c_text = $('input[name="t5c"]'),
        pcn5c_text = $('input[name="pcn5c"]'),
        vybt_text = $('input[name="vybt"]'),
        vmy_text = $('input[name="vmy"]'),
        q5c_text = $('input[name="q5c"]'),
        pcny_text = $('input[name="pcny"]'),
        pcny5_text = $('input[name="pcny5"]'),
        dp_text = $('input[name="dp"]'),
        DP_text = $('input[name="DP"]'),
       /*Ввод выходных значений для 5c расчета */
       v5c_text.val(v5c);
       vm5c_text.val(vm5c);
       n5c_text.val(n5c);
       k5c_text.val(k5c);
       y5c_text.val(y5c);
       t5c_text.val(t5c);
       pcn5c_text.val(pcn5c);
       vybt_text.val(vybt);
       vmy_text.val(vmy);
       q5c_text.val(q5c);
       pcny_text.val(pcny);
       pcny5_text.val(pcny5);
       dp_text.val(dp);
       DP_text.val(DP);
      $.ajax({
        url: '../../calc_db5c.php',
        type: 'POST',
        data: {
            /*Отправка всех значений  5c расчета */
            pr5c:pr5c,
            plv5c:plv5c,
            pns5c:pns5c,
            dskv5c:dskv5c,
            dn5c:dn5c,
            L5c:L5c,
            dn25c:dn25c,
            Lybt5c:Lybt5c,
            sst5c:sst5c,
            Lvert5c:Lvert5c,
            v5c:v5c,
            vm5c:vm5c,
            n5c:n5c,
            k5c:k5c,
            t5c:t5c,
            y5c:y5c,
            pcn5c:pcn5c,
            vybt:vybt,
            vmy:vmy,
            q5c:q5c,
            pcny:pcny,
            pcny5:pcny5,
            dp:dp,
            DP:DP,
                    }
    });
});

$(".demo").click(function () {
let
/*Автозаполнение демо значений для 5c расчета */
  pr5c_text = $('input[name="pr5c"]'),
  plv5c_text = $('input[name="plv5c"]'),
  pns5c_text = $('input[name="pns5c"]');
  dskv5c_text = $('input[name="dskv5c"]');
  dn5c_text = $('input[name="dn5c"]');
  L5c_text = $('input[name="L5c"]');
  dn25c_text = $('input[name="dn25c"]');
  Lybt5c_text = $('input[name="Lybt5c"]');
  sst5c_text = $('input[name="sst5c"]');
  Lvert5c_text = $('input[name="Lvert5c"]');
  pr5c_text.val(1790); 
  plv5c_text.val(60);
  pns5c_text.val(9.6);
  dskv5c_text.val(200);
  dn5c_text.val(114);
  L5c_text.val(1500); 
  dn25c_text.val(159);
  Lybt5c_text.val(160);
  sst5c_text.val(1.37);
  Lvert5c_text.val(4572);
  });