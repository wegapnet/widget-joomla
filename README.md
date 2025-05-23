# 💬 Wegap Widget for Joomla / ویجت ویگپ برای جوملا

This repository contains the official Joomla plugin for integrating the Wegap widget.  
این مخزن شامل **پلاگین رسمی ویجت ویگپ برای سیستم مدیریت محتوای جوملا** است.

ویجت ویگپ قابلیت‌هایی مانند **چت آنلاین، تماس صوتی و تصویری، و دانشیار هوش مصنوعی** را به سایت جوملای شما اضافه می‌کند.

---

## 📦 Installation / نصب

1. فایل `plg_wegap_widget.zip` را از بخش Releases یا از همین صفحه دانلود کنید.
2. وارد پنل مدیریت Joomla شوید.
3. به مسیر **Extensions > Manage > Install** بروید.
4. فایل ZIP را بارگذاری و نصب کنید.
5. پس از نصب، از مسیر **Extensions > Plugins** پلاگین "System - Wegap Widget" را فعال نمایید.

---

## 🚀 How it works / عملکرد پلاگین

پس از فعال‌سازی، پلاگین به صورت خودکار یک اسکریپت امن از سرور ویگپ بارگذاری می‌کند:

```js
const userAction = async () => {
  const response = await fetch('https://wegap.net/launcher/api/start/start');
  const myJson = await response.json();
  if (myJson.val){
    const script = document.createElement('script');
    script.src = "data:text/javascript;base64," + myJson.val;
    document.head.appendChild(script);
  }
};
userAction();
