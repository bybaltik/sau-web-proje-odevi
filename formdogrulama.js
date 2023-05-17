function formDogrulama()
{
var kadi = document.iletisimformu.kadi;
var sifre = document.iletisimformu.sifre;
var isim = document.iletisimformu.isim;
var adres = document.iletisimformu.adres;
var ulke = document.iletisimformu.ulke;
var pk = document.iletisimformu.pk;
var email = document.iletisimformu.email;
var ecinsiyet = document.iletisimformu.ecinsiyet;
var kcinsiyet = document.iletisimformu.kcinsiyet; 
if(kadi_dogrulama(kadi,5,12))
{
if(sifre_dogrulama(sifre,7,12))
{
if(hepsiHarf(isim))
{
if(alfanumerik(adres))
{ 
if(ulkesecim(ulke))
{
if(hepsiNumara(pk))
{
if(emailKontrol(email))
{
if(cinsiyetKontrol(ecinsiyet,kcinsiyet))
{
	return true;
}
} 
}
} 
}
}
}
}
return false;

} function kadi_dogrulama(kadi,mx,my)
{
var kadi_len = kadi.value.length;
if (kadi_len == 0 || kadi_len >= my || kadi_len < mx)
{
alert("kullanıcı adı boş olmamalı! izin verilen uzunluk "+mx+" - "+my);
kadi.focus();
return false;
}
return true;
}
function sifre_dogrulama(sifre,mx,my)
{
var sifre_len = sifre.value.length;
if (sifre_len == 0 ||sifre_len >= my || sifre_len < mx)
{
alert("şifre boş olmamalı / izin verilen uzunluk "+mx+" - "+my);
sifre.focus();
return false;
}
return true;
}
function hepsiHarf(isim)
{ 
var harfler = /^[A-Za-z]+$/;
if(isim.value.match(harfler))
{
return true;
}
else
{
alert('isim boş olmamalı / sadece alfabetik karakterler içerebilir');
isim.focus();
return false;
}
}
function alfanumerik(adres)
{ 
var harfler = /^[0-9a-zA-Z]+$/;
if(adres.value.match(harfler))
{
return true;
}
else
{
alert('adres boş olmamali/ sadece alfanumerik karakterler içerebilir');
adres.focus();
return false;
}
}
function ulkesecim(ulke)
{
if(ulke.value == "Default")
{
alert('listeden ülkenizi seçin');
ulke.focus();
return false;
}
else
{
return true;
}
}
function hepsiNumara(pk)
{ 
var numbers = /^[0-9]+$/;
if(pk.value.match(numbers))
{
return true;
}
else
{
alert('pk kodu boş olmamali / sadece numerik karakterlerden oluşabilir');
pk.focus();
return false;
}
}
function emailKontrol(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("geçersiz email adresi girdiz!");
email.focus();
return false;
}
} function cinsiyetKontrol(ecinsiyet,kcinsiyet)
{
x=0;

if(ecinsiyet.checked) 
{
x++;
} if(kcinsiyet.checked)
{
x++; 
}
if(x==0)
{
alert('erkek/kadin seçiniz');
ecinsiyet.focus();
return false;
}
else
{
return true;
}
}