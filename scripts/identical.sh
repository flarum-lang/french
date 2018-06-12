VERSION=master

TEMP_DIR=`mktemp -d`
WORK_DIR=`pwd`

GREEN='\033[0;32m'
RED='\033[0;31m'
NC='\033[0m'

if ! [ -x "$(command -v same-yaml)" ]; then
  echo 'Error: same-yaml is not installed.' >&2
  exit 1
fi

if [[ ! "$TEMP_DIR" || ! -d "$TEMP_DIR" ]]; then
  exit 1
fi

function cleanup {
  rm -rf "$TEMP_DIR"
}

cd "$TEMP_DIR"

curl -s -L "https://github.com/flarum/flarum-ext-english/archive/$VERSION.tar.gz" | tar xz

cd "$TEMP_DIR/flarum-ext-english-$VERSION/locale"

RC=0

for r in *.yml
do
  echo "Testing $r:"
  same-yaml --ref "$r" --tra "$WORK_DIR/locale/$r"
  if [ $? -eq 1 ]
  then
    RC=1
    printf "${RED}⨉ failed${NC}\n"
  else
    printf "${GREEN}✓ passed${NC}\n"
  fi
  echo
done

trap cleanup EXIT

exit $RC
