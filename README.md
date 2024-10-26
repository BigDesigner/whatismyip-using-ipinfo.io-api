# What Is My IP Project

This project is a web application that displays the user's IP information through the IPinfo.io API. You need an IPinfo.io token to use this project.

## Requirements

- PHP 7.0 or higher
- MySQL database
- Web server (Apache or Nginx)

## Installation Steps

1. **Install Requirements**: Make sure you have PHP and MySQL installed on your server.
   
2. **Download Project Files**: Download the project files and upload them to your server.

3. **Create a Database**: Create a new database in your MySQL server.

4. **Import SQL File**: Use the following SQL code to create the `config` table:
    ```sql
    CREATE TABLE `config` (
      `id` int NOT NULL,
      `token` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

    ALTER TABLE `config`
      ADD PRIMARY KEY (`id`);

    ALTER TABLE `config`
      MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
    ```

    **Note**: After importing the above code into your SQL, update the `token` value in the `config` table with the token you received from IPinfo.io:
    ```sql
    INSERT INTO `config` (`id`, `token`) VALUES (1, 'YOURTOKEN');
    ```
    Manually enter your IPinfo.io token in place of `YOURTOKEN`.

5. **Configure Project Files**: Update the database settings in the `config.php` file.

## Steps to Obtain IPinfo.io Token

1. Go to the https://ipinfo.io/ website.
2. Click the "Sign Up" button and fill in the required information to create an account.
3. After logging in to your account, go to the "API Tokens" section.
4. Click the "Create Token" button and create a new token.
5. Copy the generated token and paste it into the `YOURTOKEN` section as specified in the SQL step above.

## Usage

Open your project in a web browser. You will see your IP information displayed.

## Contributing

If you would like to contribute to this project, please create a "Pull Request."

## License

This project is licensed under the MIT License.

---

# IP Bilgilerim Projesi

Bu proje, kullanıcının IP bilgilerini IPinfo.io API'si aracılığıyla gösteren bir web uygulamasıdır. Projeyi kullanabilmek için bir IPinfo.io token'ına ihtiyacınız var.

## Gereksinimler

- PHP 7.0 veya üstü
- MySQL veritabanı
- Web sunucusu (Apache veya Nginx)

## Kurulum Adımları

1. **Gereksinimleri Yükleyin**: Sunucunuzda PHP ve MySQL yüklü olduğundan emin olun.
   
2. **Proje Dosyalarını İndirin**: Projenin dosyalarını indirin ve sunucunuza yükleyin.

3. **Veritabanı Oluşturun**: MySQL veritabanınızda yeni bir veritabanı oluşturun.

4. **SQL Dosyasını Aktarın**: Aşağıdaki SQL kodunu kullanarak `config` tablosunu oluşturun:
    ```sql
    CREATE TABLE `config` (
      `id` int NOT NULL,
      `token` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

    ALTER TABLE `config`
      ADD PRIMARY KEY (`id`);

    ALTER TABLE `config`
      MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
    ```

    **Dikkat**: Yukarıdaki kodu SQL'e aktardıktan sonra, `config` tablosundaki `token` değerini IPinfo.io'dan aldığınız token ile güncelleyin:
    ```sql
    INSERT INTO `config` (`id`, `token`) VALUES (1, 'YOURTOKEN');
    ```
    `YOURTOKEN` kısmına IPinfo.io'dan aldığınız token bilgisini manuel olarak girin.

5. **Proje Dosyalarını Yapılandırın**: `config.php` dosyasındaki veritabanı ayarlarını güncelleyin.

## IPinfo.io Token Alma Adımları

1. https://ipinfo.io/ web sitesine gidin.
2. "Sign Up" butonuna tıklayın ve gerekli bilgileri doldurarak bir hesap oluşturun.
3. Hesabınıza giriş yaptıktan sonra, "API Tokens" bölümüne gidin.
4. "Create Token" butonuna tıklayın ve yeni bir token oluşturun.
5. Oluşturduğunuz token'ı kopyalayın ve yukarıdaki SQL adımında belirtildiği gibi `YOURTOKEN` kısmına yapıştırın.

## Kullanım

Web tarayıcınızda projenizi açın. IP bilgilerinizi göreceksiniz.

## Katkıda Bulunma

Bu projeye katkıda bulunmak isterseniz, lütfen bir "Pull Request" oluşturun.

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır.
