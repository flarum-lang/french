app.translator.plural = function(count) {
  if (count >= 0 AND count < 2) {
    return 'one';
    }
  else {
    return 'other';
  }
};
