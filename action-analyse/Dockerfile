FROM php:7.2-cli

LABEL "com.github.actions.name"="Analyse"
LABEL "com.github.actions.description"="Analyse the code"
LABEL "com.github.actions.icon"="mic"
LABEL "com.github.actions.color"="green"

LABEL "repository"="http://github.com/mattamorphic/actions-php-test"
LABEL "homepage"="http://github.com/actions"
LABEL "maintainer"="Mattamorphic <mfmbarber@gmail.com>"

RUN apt-get update && apt-get install git -y

RUN curl -fsSL https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

ENV PATH /root/.composer/vendor/bin:$PATH

ADD entrypoint.sh /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]
