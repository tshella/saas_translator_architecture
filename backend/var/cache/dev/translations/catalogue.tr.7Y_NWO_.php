<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu değer olumsuz olmalıdır.',
    'This value should be true.' => 'Bu değer olumlu olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu değerin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu değer boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçtiğiniz değer geçerli bir seçenek değildir.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'En az {{ limit }} seçenek belirtmelisiniz.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'En çok {{ limit }} seçenek belirtmelisiniz.',
    'One or more of the given values is invalid.' => 'Verilen değerlerden bir veya daha fazlası geçersiz.',
    'This field was not expected.' => 'Bu alan beklenen olmadı.',
    'This field is missing.' => 'Bu alan, eksiktir',
    'This value is not a valid date.' => 'Bu değer doğru bir tarih biçimi değildir.',
    'This value is not a valid datetime.' => 'Bu değer doğru bir tarihsaat biçimi değildir.',
    'This value is not a valid email address.' => 'Bu değer doğru bir e-mail adresi değildir.',
    'The file could not be found.' => 'Dosya bulunamadı.',
    'The file is not readable.' => 'Dosya okunabilir değildir.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük ({{ size }} {{ suffix }}). İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Dosyanın mime tipi geçersiz ({{ type }}). İzin verilen mime tipleri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu değer {{ limit }} ve altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu değer çok uzun. {{ limit }} karakter veya daha az olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu değer {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu değer çok kısa. {{ limit }} karakter veya daha fazla olmalıdır.',
    'This value should not be blank.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should not be null.' => 'Bu değer boş bırakılmamalıdır.',
    'This value should be null.' => 'Bu değer boş bırakılmalıdır.',
    'This value is not valid.' => 'Bu değer geçerli değildir.',
    'This value is not a valid time.' => 'Bu değer doğru bir saat değildir.',
    'This value is not a valid URL.' => 'Bu değer doğru bir URL değildir.',
    'The two values should be equal.' => 'İki değer eşit olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Dosya çok büyük. İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Dosya çok büyük.',
    'The file could not be uploaded.' => 'Dosya yüklenemiyor.',
    'This value should be a valid number.' => 'Bu değer geçerli bir rakam olmalıdır.',
    'This file is not a valid image.' => 'Bu dosya geçerli bir resim değildir.',
    'This is not a valid IP address.' => 'Bu değer geçerli bir IP adresi değildir.',
    'This value is not a valid language.' => 'Bu değer geçerli bir lisan değildir.',
    'This value is not a valid locale.' => 'Bu değer geçerli bir yer değildir.',
    'This value is not a valid country.' => 'Bu değer geçerli bir ülke değildir.',
    'This value is already used.' => 'Bu değer şu anda kullanımda.',
    'The size of the image could not be detected.' => 'Resmin boyutu saptanamıyor.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Resmin genişliği çok büyük ({{ width }}px). İzin verilen en büyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Resmin genişliği çok küçük ({{ width }}px). En az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Resmin yüksekliği çok büyük ({{ height }}px). İzin verilen en büyük yükseklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Resmin yüksekliği çok küçük ({{ height }}px). En az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu değer kullanıcının şu anki şifresi olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu değer tam olarak {{ limit }} karakter olmaldır.',
    'The file was only partially uploaded.' => 'Dosya sadece kısmen yüklendi.',
    'No file was uploaded.' => 'Hiçbir dosya yüklenmedi.',
    'No temporary folder was configured in php.ini.' => 'php.ini\'de geçici bir klasör yapılandırılmadı veya yapılandırılan klasör mevcut değildir.',
    'Cannot write temporary file to disk.' => 'Geçici dosya diske yazılamıyor.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP eklentisi dosyanın yüklemesini başarısız kıldı.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu derlem {{ limit }} veya daha çok eleman içermelidir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu derlem {{ limit }} veya daha az eleman içermelidir.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu derlem {{ limit }} eleman içermelidir.',
    'Invalid card number.' => 'Geçersiz kart numarası.',
    'Unsupported card type or invalid card number.' => 'Desteklenmeyen kart tipi veya geçersiz kart numarası.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu değer geçerli bir Uluslararası Banka Hesap Numarası (IBAN) değildir.',
    'This value is not a valid ISBN-10.' => 'Bu değer geçerli bir ISBN-10 değildir.',
    'This value is not a valid ISBN-13.' => 'Bu değer geçerli bir ISBN-13 değildir.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Bu değer geçerli bir ISBN-10 veya ISBN-13 değildir.',
    'This value is not a valid ISSN.' => 'Bu değer geçerli bir ISSN değildir.',
    'This value is not a valid currency.' => 'Bu değer geçerli bir para birimi değildir.',
    'This value should be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmalıdır.',
    'This value should be greater than {{ compared_value }}.' => 'Bu değer {{ compared_value }} değerinden büyük olmalıdır.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit veya büyük olmalıdır.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmalıdır.',
    'This value should be less than {{ compared_value }}.' => 'Bu değer {{ compared_value }} değerinden düşük olmalıdır.',
    'This value should be less than or equal to {{ compared_value }}.' => '.Bu değer {{ compared_value }} ile eşit veya düşük olmalıdır.',
    'This value should not be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmamalıdır.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmamalıdır.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Resim oranı çok büyük ({{ ratio }}). İzin verilen maksimum oran: {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Resim oranı çok ufak ({{ ratio }}). Beklenen minimum oran {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Resim karesi ({{ width }}x{{ height }}px). Kare resimlerine izin verilmiyor.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Resim manzara odaklı ({{ width }}x{{ height }}px). Manzara odaklı resimlere izin verilmiyor.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Resim portre odaklı ({{ width }}x{{ height }}px). Portre odaklı resimlere izin verilmiyor.',
    'An empty file is not allowed.' => 'Boş bir dosyaya izin verilmiyor.',
    'The host could not be resolved.' => 'Sunucu çözülemedi.',
    'This value does not match the expected {{ charset }} charset.' => 'Bu değer beklenen {{ charset }} karakter kümesiyle eşleşmiyor.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu değer geçerli bir İşletme Tanımlama Kodu (BIC) değildir.',
    'Error' => 'Hata',
    'This is not a valid UUID.' => 'Bu değer geçerli bir UUID değildir.',
    'This value should be a multiple of {{ compared_value }}.' => 'Bu değer {{ compare_value }} değerinin katlarından biri olmalıdır.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bu İşletme Tanımlayıcı Kodu (BIC), IBAN {{ iban }} ile ilişkili değildir.',
    'This value should be valid JSON.' => 'Bu değer için geçerli olmalıdır JSON.',
    'This collection should contain only unique elements.' => 'Bu grup yalnızca benzersiz öğeler içermelidir.',
    'This value should be positive.' => 'Bu değer pozitif olmalıdır.',
    'This value should be either positive or zero.' => 'Bu değer pozitif veya sıfır olmalıdır.',
    'This value should be negative.' => 'Bu değer negatif olmalıdır.',
    'This value should be either negative or zero.' => 'Bu değer, negatif veya sıfır olmalıdır.',
    'This value is not a valid timezone.' => 'Bu değer, geçerli bir saat dilimi değildir.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Bu parola, bir veri ihlali nedeniyle sızdırılmıştır ve kullanılmamalıdır. Lütfen başka bir şifre kullanın.',
    'This value should be between {{ min }} and {{ max }}.' => 'Bu değer {{ min }} ve {{ max }} arasında olmalıdır.',
    'This value is not a valid hostname.' => 'Bu değer, geçerli bir ana bilgisayar adı değildir.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Bu gruptaki öğe sayısı birden fazla olmalıdır {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Bu değer aşağıdaki kısıtlamalardan birini karşılamalıdır:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Bu gruptaki her öğe kendi kısıtlamalarını karşılamalıdır.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Bu değer geçerli bir Uluslararası Menkul Kıymetler Kimlik Numarası (ISIN) değildir.',
    'This value should be a valid expression.' => 'Bu değer geçerli bir ifade olmalıdır.',
    'This value is not a valid CSS color.' => 'Bu değer geçerli bir CSS rengi değildir.',
    'This value is not a valid CIDR notation.' => 'Bu değer geçerli bir CIDR yazımı değildir.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Netmask\'in değeri {{ min }} ve {{ max }} arasında olmaldır.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Dosya adı çok uzun. {{ filename_max_length }} karakter veya daha az olmalıdır.',
    'The password strength is too low. Please use a stronger password.' => 'Şifre gücü çok düşük. Lütfen daha güçlü bir şifre kullanın.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Bu değer, mevcut kısıtlama seviyesi tarafından izin verilmeyen karakterler içeriyor.',
    'Using invisible characters is not allowed.' => 'Görünmez karakterlerin kullanılması izin verilmez.',
    'Mixing numbers from different scripts is not allowed.' => 'Farklı yazı türlerinden sayıların karıştırılması izin verilmez.',
    'Using hidden overlay characters is not allowed.' => 'Gizli üstü kaplama karakterlerinin kullanılması izin verilmez.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Dosya uzantısı geçersiz ({{ extension }}). İzin verilen uzantılar {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Tespit edilen karakter kodlaması geçersiz ({{ detected }}). İzin verilen kodlamalar: {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Bu değer geçerli bir MAC adresi değildir.',
    'This URL is missing a top-level domain.' => 'Bu URL bir üst seviye alan adı eksik.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'Bu değer çok kısa. En az bir kelime içermelidir.|Bu değer çok kısa. En az {{ min }} kelime içermelidir.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'Bu değer çok uzun. Tek bir kelime içermelidir.|Bu değer çok uzun. {{ max }} veya daha az kelime içermelidir.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'Bu değer ISO 8601 formatında geçerli bir haftayı temsil etmezdir.',
    'This value is not a valid week.' => 'Bu değer geçerli hafta değildir.',
    'This value should not be before week "{{ min }}".' => 'Bu değer “{{ min }}” haftasından önce olmamalıdır.',
    'This value should not be after week "{{ max }}".' => 'Bu değer “{{ max }}” haftasından sonra olmamalıdır',
    'This value is not a valid Twig template.' => 'Bu değer geçerli bir Twig şablonu olarak kabul edilmiyor.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bir yetkilendirme istisnası oluştu.',
    'Authentication credentials could not be found.' => 'Kimlik bilgileri bulunamadı.',
    'Authentication request could not be processed due to a system problem.' => 'Bir sistem hatası nedeniyle yetkilendirme isteği işleme alınamıyor.',
    'Invalid credentials.' => 'Geçersiz kimlik bilgileri.',
    'Cookie has already been used by someone else.' => 'Çerez bir başkası tarafından zaten kullanılmıştı.',
    'Not privileged to request the resource.' => 'Kaynak talebi için imtiyaz bulunamadı.',
    'Invalid CSRF token.' => 'Geçersiz CSRF fişi.',
    'No authentication provider found to support the authentication token.' => 'Yetkilendirme fişini destekleyecek yetkilendirme sağlayıcısı bulunamadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Oturum bulunamadı, zaman aşımına uğradı veya çerezler etkin değil.',
    'No token could be found.' => 'Fiş bulunamadı.',
    'Username could not be found.' => 'Kullanıcı adı bulunamadı.',
    'Account has expired.' => 'Hesap zaman aşımına uğradı.',
    'Credentials have expired.' => 'Kimlik bilgileri zaman aşımına uğradı.',
    'Account is disabled.' => 'Hesap engellenmiş.',
    'Account is locked.' => 'Hesap kilitlenmiş.',
    'Too many failed login attempts, please try again later.' => 'Çok fazla başarısız giriş denemesi, lütfen daha sonra tekrar deneyin.',
    'Invalid or expired login link.' => 'Geçersiz veya süresi dolmuş oturum açma bağlantısı.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Çok fazla başarısız giriş denemesi, lütfen %minutes% dakika sonra tekrar deneyin.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Çok fazla başarısız giriş denemesi, lütfen %minutes% dakika sonra tekrar deneyin.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'This value does not represent a valid week in the ISO 8601 format.',
    'This value is not a valid week.' => 'This value is not a valid week.',
    'This value should not be before week "{{ min }}".' => 'This value should not be before week "{{ min }}".',
    'This value should not be after week "{{ max }}".' => 'This value should not be after week "{{ max }}".',
    'This value is not a valid Twig template.' => 'This value is not a valid Twig template.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
