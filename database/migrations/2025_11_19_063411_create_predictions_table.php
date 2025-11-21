public function up()
{
    Schema::create('predictions', function (Blueprint $table) {
        $table->id();
        $table->integer('age')->nullable();
        $table->tinyInteger('gender')->nullable();
        $table->float('blood_pressure_systolic')->nullable();
        $table->float('blood_pressure_diastolic')->nullable();
        $table->float('cholesterol')->nullable();
        $table->tinyInteger('smoking_status')->nullable();
        $table->json('raw_payload')->nullable();
        $table->timestamps();
    });
}
