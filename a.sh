#!/bin/bash  

# تعریف آرایه‌ای از مسیرها  
declare -a files=(  
"modules/products/list_products.php"  
"modules/products/categories.php"  
"modules/products/inventory.php"  
"modules/sales/quick_sale.php"  
"modules/sales/sales_invoice.php"  
"modules/settings/general.php"  
"modules/settings/backup.php"  
"modules/settings/update.php"  
"modules/user/profile.php"  
"modules/user/change_password.php"  
)  

# ایجاد دایرکتوری‌ها و فایل‌ها  
for file in "${files[@]}"; do  
    # استخراج مسیر دایرکتوری  
    dir=$(dirname "$file")  
    
    # ایجاد دایرکتوری در صورت عدم وجود آن  
    mkdir -p "$dir"  
    
    # ایجاد فایل PHP  
    touch "$file"  
    
    # (اختیاری) نوشتن محتویات اولیه در فایل  
    echo "<?php" > "$file"  
    echo "// فایل ${file##*/} ایجاد شد" >> "$file"  
    echo "?>" >> "$file"  
done  

echo "همه فایل‌ها با موفقیت ایجاد شدند."  