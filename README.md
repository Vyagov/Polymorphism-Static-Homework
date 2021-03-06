# Polymorphism-Static-Homework
in IT Talents

##Задача 1:
Ще създадем класове представляващи бележник и „защитен“ бележник.
За целта, първо създайте клас представляващ страница.

###1. Всяка страница има:

–заглавие

–текст

Всяка страница ще има следната функционалност:

–към всяка страница може да се добавя текст

–текста на всяка страница може да бъде изтриван

–всяка страница ще може да се преглежда(т.е. метод, който връща
String със заглавието и текста на нов ред)

###2. Създайте абстрактен клас за бележник AbstractNotepad:

Всеки бележник може да:

–Добавя даден текст към страница с определен номер

–Добавя даден текст върху страница с определен номер (изтрива
предишния и записва новия)

–Да трие текста от дадена страница

–Да преглежда всички страници (да принтира заглавието и текста)

###3. Направете клас SimpleNotepad, който да е бележник (съдържа в себе
си множество страници)

Помислете какви полета ще има този клас и какъв конструктор е
подходящ. Конструктора трябва да е такъв, че след създаването на
бележника, той да е готов за работа (т.е. да може да се викат всичките
методите за писане, триене, преглеждане...)

###4. Напишете телата на методите, като внимавате за това какви
стойности се подават като параметри.

Ако някъде видите някаква обща логика, изнесете я на централно
място (в отделен метод).

###5. Създайте бележник SecuredNotepad, който е защитен бележник.
Всеки един такъв бележник има собствена парола, която се задава при
създаването му.

Бележника може да прави същите неща (писане, триене, принтиране) и
по същия начин като нормален бележник (SimpleNotepad), но преди
извършването на всяка операция на бележника, се изисква бъде
подадена паролата на бележника в суперглобалния _GET масив. Само
ако е въведена правилна парола операцията се извършва, в противен
случай операцията не се извършва.

###6. Създайте скрипт NotepadDemo, където да пробвате използването на
класовете Page, SimpleNotepad и SecuredNotepad.

##Задача 2:
Да се допълни йерархията от класове по следния начин:

В класа Page да се създадат следните методи:

–searchWord($word) – метода проверява дали думата се съдържа в
текста на страницата

–containsDigits() - метода проверява дали текста на страницата съдържа
числа

Да се добавят следните методи в абстрактния клас AbstractNotepad:

–searchWord($word) – проверява дали в някоя страница на бележника
се съдържа думата word

–printAllPagesWithDigits() - метода извежда на екрана съдържанието на
всички страници които съдържат цифри

Да се създаде abstract class AbstractЕlectronicDevice с методи:

–start() - стартира устройството

–stop() - спира устройството

–isStarted – проверява дали устройството е пуснато

Да се създаде клас ElectronicSecuredNotepad, който е сигурен
електронен бележник. За да е възможна каквато и да е операция в/у
бележника е нужно той да е пуснат. Естествено, преди всяка операция
в/у бележника да се изисква въведена парола _GET масива.

В класа Demo да се демонстрира употребата на
ElectronicSecuredNotepad.

Да се промени функционалността на SecuredNotepad, така че всеки
защитен бележник да изисква задаване на силна парола при
създаването си. Под силна парола се разбира парола с поне 5 символа,
с поне една малка буква, голяма буква и число.Променете класа

SecuredNotepad, че ако при създаването не се въведе силна парола, да
не се създава обект от тип SecuredNotepad.
